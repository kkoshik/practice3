<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Развлечения</title>
    <link rel="stylesheet" href="./css/razv.css">
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
    
    <div class="container">
        <div class="entertainment-header">
            <h1>Развлечения в ТРК "Сити Центр"</h1>
            <p>Яркие эмоции для детей и взрослых</p>
        </div>

        <div class="entertainment-card">
            <div class="card-image" style="background-image: url('./media/razv1.jpg'); margin: 20px; border-radius: 8px;"></div>
            <div class="card-content">
                <h2>Детский развлекательный центр "Сити Гейм"</h2>
                <p>Лучшее место для детских праздников и активного отдыха в Находке</p>
                
                <div class="highlights">
                    <ul>
                        <li>Организация детских дней рождения</li>
                        <li>Детская комната с безопасным покрытием</li>
                        <li>Профессиональные аниматоры</li>
                        <li>Развивающие игры и аттракционы</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="entertainment-card">
            <div class="card-image" style="background-image: url('./media/razv3.jpg'); margin: 20px; border-radius: 8px;"></div>
            <div class="card-content">
                <h2>Прогулочная набережная</h2>
                <p>Прекрасное место для отдыха всей семьей</p>
                
                <div class="highlights">
                    <ul>
                        <li>Живописные фонтаны и зоны отдыха</li>
                        <li>Специальные дорожки для роликов и самокатов</li>
                        <li>Летние кафе с детским меню</li>
                        <li>Места для фотосессий</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="entertainment-card">
            <div class="card-image" style="background-image: url('./media/razv2.jpg'); margin: 20px; border-radius: 8px;"></div>
            <div class="card-content">
                <h2>Детская игровая площадка</h2>
                <p>Резиновое покрытие для безопасности ваших детей</p>
                
                <div class="highlights">
                    <ul>
                        <li>Яркие и весёлые качели</li>
                        <li>Большая спиральная горка</li>
                        <li>Качественные качели для детей</li>
                        <li>Место отдыха для взрослых</li>
                    </ul>
                </div>
            </div>
        </div>
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