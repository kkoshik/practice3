<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТРК "Сити Центр"</title>
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

    <main>
        <section class="hero">
            <div class="hero-image">
                <img src="./media/1.jpg" alt="photo" id="photo">
            </div>
        </section>

        <section class="about">
            <h1>Торгово-развлекательный комплекс</h1>
            <p>Приходите к нам на шоппинг или прогулку, хорошо проводите время и получайте положительные эмоции. Будем рады видеть вас на нашей улице "City Street". Помните, тут вы также можете вкусно перекусить вкуснейшей пиццей!</p>
            <div class="about-gallery">
                <div class="about-image">
                    <img src="./media/photo2.png" alt="photo" id="photo">
                </div>
                <div class="about-image">
                    <img src="./media/photo3.png" alt="photo" id="photo">
                </div>
            </div>
        </section>

        <section class="news">
            <h2>Последние новости</h2>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-image">
                        <img src="./media/photo4.jpg" alt="photo">
                    </div>
                    <h3>Открытие нового кинотеатра</h3>
                    <p>С 1 июля в нашем комплексе работает современный кинозал с технологией IMAX.</p>
                    <span class="news-date">15.06.2024</span>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="./media/photo5.jpg" alt="photo">
                    </div>
                    <h3>Скидки на брендовую одежду</h3>
                    <p>Специальные предложения от ведущих брендов до конца месяца.</p>
                    <span class="news-date">10.06.2024</span>
                </div>
            </div>
        </section>
    </main>
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