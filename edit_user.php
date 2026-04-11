<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: auth.php");
}
include './application/connect.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    // Если пароль изменен
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $user['password'];

    $stmt = $pdo->prepare("UPDATE users SET username = ?, email = ?, password = ?, role = ? WHERE id = ?");
    $stmt->execute([$username, $email, $password, $role, $id]);
    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактировать пользователя</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <div class="container">
        <h1>Редактировать пользователя #<?php echo $id; ?></h1>
        <form method="POST">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $user['username']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $user['email']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Новый пароль (оставьте пустым, если не менять)</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label>Role</label>
                <select name="role" class="form-select">
                    <option value="user" <?php if($user['role']=='user') echo 'selected'; ?>>User</option>
                    <option value="admin" <?php if($user['role']=='admin') echo 'selected'; ?>>Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
</body>
</html>