<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/auth.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="login-container">
        <h1 class="login-title">Регистрация</h1>
        
        <form action="./components/register.php" method="post">
            <div class="input-group">
                <label for="email">Электронная почта</label>
                <input type="email" id="email" name="email" required placeholder="пример@mail.com">
            </div>
            
            <div class="input-group">
                <label for="password">Имя</label>
                <input type="username" id="username" name="username" required placeholder="Введите имя">
            </div>

            <div class="input-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required placeholder="Введите пароль">
            </div>
            
            <button type="submit" class="login-button">Зарегистрироваться</button>

            <a href="auth.php" class="forgot-password">Уже есть аккаунт?</a>
        </form>
    </div>
</body>
</html>