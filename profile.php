<?
    unset($_SESSION);
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: auth.php");
    }
    include './application/connect.php';
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой профиль</title>
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header class="header">
        <div class="logo-placeholder">
            <a href="./index.php">
                <img src="./media/logo.png" alt="logo" id="photo">
            </a>
        </div>
        <input type="checkbox" id="burgerToggle" class="burger-toggle">
        <label for="burgerToggle" class="burger-menu">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
        </label>
        <nav class="sidebar">
            <ul style="list-style-type: none;">
                <li><a href="news.php">Новости</a></li>
                <li><a href="./razv.php">Развлечения</a></li>
                <li><a href="./aboutus.php">О нас</a></li>
                <li><a href="auth.php">Войти</a></li>
            </ul>
        </nav>
    </header>

    <div class="profile-container">
        <div class="profile-header">
            <img src="./media/favicon.png" alt="Аватар" class="avatar">
            <div class="user-info">
                <h1>
                    <?php
                        echo $user['username'];
                    ?>
                </h1>
                <p>
                    <?php
                        echo $user['email'];
                    ?>
                </p>
            </div>
        </div>
        
        <div class="profile-content">
            <h2 class="section-title">О себе</h2>
            <p>Дополнительная информация о пользователе</p>
        </div>

        <a href="./components/logout.php" class="logout-btn">Выйти</a>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Режим работы:</h3>
                <p>Пн - Вс</p>
                <p>10:00 - 20:00</p>
            </div>

            <div class="footer-section">
                <h3>Контакты:</h3>
                <p>г. Находка, пр-кт Мира, 65, 692918</p>
                <p>Телефон: <a href="tel:+7425624222">624-222</a></p>
            </div>

            <div class="footer-section">
                <h3>Мы в соцсетях:</h3>
                <div class="social-links">
                    <a href="#" aria-label="ВКонтакте"><i class="fab fa-vk"></i></a>
                    <a href="#" aria-label="Telegram"><i class="fab fa-telegram"></i></a>
                </div>
                <p>ТРК "Сити Центр" Находка</p>
                <p>Сити Центр</p>
            </div>
        </div>

        <div class="copyright">
            &copy; 2026 ТРК "Сити Центр". Все права защищены.
        </div>
    </footer>
</body>
</html>