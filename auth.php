<?
    session_start();
    $login_error = $_SESSION['login_error'] ?? '';
    unset($_SESSION['login_error']);

    $register_error = $_SESSION['register_error'] ?? '';
    unset($_SESSION['register_error']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/auth.css">
    <title>Вход в личный кабинет</title>
</head>
<body>
    <div class="login-container">
        <h1 class="login-title">Вход в личный кабинет</h1>
        
        <form action="./components/login.php" method="post">
            <div class="input-group">
                <label for="email">Электронная почта</label>
                <input type="email" id="email" name="email" required placeholder="пример@mail.com">
            </div>
            
            <div class="input-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required placeholder="Введите пароль">
            </div>

                <?php if ($login_error): ?>
                    <div class="error-message">
                        <p style='color: #d32f2f;background: #ffebee;'><?php echo htmlspecialchars($login_error); ?></p>
                    </div>
                <?php endif; ?>

            <button type="submit" class="login-button">Войти</button>
            
            <a href="#" class="forgot-password">Забыли пароль?</a>

            <a href="reg.php" class="forgot-password">Нет аккаунта?</a>
        </form>
    </div>
</body>
</html>