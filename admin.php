
<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: auth.php");
    exit();
}
include './application/connect.php';

// Обработка удаления
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: admin.php");
    exit();
}

// Пагинация
$per_page = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $per_page;

$total_stmt = $pdo->query("SELECT COUNT(*) FROM users");
$total = $total_stmt->fetchColumn();
$pages = ceil($total / $per_page);

// Модифицированный запрос с явной привязкой типов
$stmt = $pdo->prepare("SELECT * FROM users LIMIT ? OFFSET ?");
$stmt->bindParam(1, $per_page, PDO::PARAM_INT);
$stmt->bindParam(2, $offset, PDO::PARAM_INT);
$stmt->execute();
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <div class="container">
        <h1>Панель администратора</h1>

        <table class="table table-striped table-hover users-table">
            <thead class="table-dark">
                <tr><th>ID</th><th>Username</th><th>Email</th><th>Actions</th></tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                    <tr>
                        <td><?php echo $u['id']; ?></td>
                        <td><?php echo $u['username']; ?></td>
                        <td><?php echo $u['email']; ?></td>
                        <td>
                            <a href="edit_user.php?id=<?php echo $u['id']; ?>" class="edit-btn">Edit</a>
                            <form method="POST" action="admin.php" style="display:inline;">
                                <input type="hidden" name="delete_id" value="<?php echo $u['id']; ?>">
                                <button type="submit" class="delete-btn" onclick="return confirm('Удалить?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <a href="./components/logout.php" class="logout-btn">Выйти</a>
        <a href="add_user.php" class="add-user-btn">Добавить пользователя</a>

        <nav aria-label="Pagination">
            <ul class="pagination">
                <?php for ($i = 1; $i <= $pages; $i++): ?>
                    <li class="page-item <?php if($i == $page) echo 'active'; ?>">
                        <a class="page-link" href="admin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
</body>
</html>