<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="./css/news.css">
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

    <section class="news">
        <h2 class="section-title">Последние новости</h2>
        <?php
            include './application/connect.php';
            $stmt = $pdo->query("SELECT * FROM news ORDER BY date DESC");
            $news = $stmt->fetchAll();
        ?>
        <div class="news-container">
            <?php foreach ($news as $n): ?>
                <div class="news-card">
                    <div class="news-image" style="background-image: url('media/<?php echo $n['image']; ?>');"></div>
                    <div class="news-content">
                        <h3><?php echo $n['title']; ?></h3>
                        <p><?php echo $n['content']; ?></p>
                        <span class="news-date"><?php echo $n['date']; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="news-container">
            <article class="news-card visible">
                <div class="news-image" style="background-image: url('./media/news1.jpg');"></div>
                <div class="news-content">
                    <h3>День победы</h3>
                    <p>В этот день мы праздновали великий праздник, угощали гостей полевой кухней и смотрели концерт.</p>
                    <span class="news-date">09.05.2025</span>
                </div>
            </article>

            <article class="news-card visible">
                <div class="news-image" style="background-image: url('./media/news2.jpg');"></div>
                <div class="news-content">
                    <h3>Роза ветров</h3>
                    <p>Сегодня была зарыта временная капсула на набережной ТРК "Сити Центр"</p>
                    <span class="news-date">12.02.2025</span>
                </div>
            </article>

            <article class="news-card visible">
                <div class="news-image" style="background-image: url('./media/news3.jpg');"></div>
                <div class="news-content">
                    <h3>Открытие мини-рынка</h3>
                    <p>Теперь в нашем комплексе доступен мини-рынок "Фермерский" с натуральной продукцией.</p>
                    <span class="news-date">02.11.2024</span>
                </div>
            </article>

            <article class="news-card visible">
                <div class="news-image" style="background-image: url('./media/news1.jpg');"></div>
                <div class="news-content">
                    <h3>Акция в магазинах одежды</h3>
                    <p>Скидки до 50% на летние коллекции в магазинах Zara, Columbia и Zolla до конца месяца.</p>
                    <span class="news-date">0.06.2025</span>
                </div>
            </article>

            <article class="news-card visible">
                <div class="news-image" style="background-image: url('./media/news3.jpg');"></div>
                <div class="news-content">
                    <h3>Открытие Мини-Рынка</h3>
                    <p>Теперь в нашем комплексе доступен мини-рынок "Фермерский" с натуральной продукцией.</p>
                    <span class="news-date">02.11.2024</span>
                </div>
            </article>

            <article class="news-card visible">
                <div class="news-image" style="background-image: url('./media/news1.jpg');"></div>
                <div class="news-content">
                    <h3>День победы</h3>
                    <p>В этот день мы праздновали великий праздник, угощали гостей полевой кухней и смотрели концерт.</p>
                    <span class="news-date">09.05.2025</span>
                </div>
            </article>

            <article class="news-card visible">
                <div class="news-image" style="background-image: url('./media/news2.jpg');"></div>
                <div class="news-content">
                    <h3>Роза ветров</h3>
                    <p>Сегодня была зарыта временная капсула на набережной ТРК "Сити Центр"</p>
                    <span class="news-date">12.02.2025</span>
                </div>
            </article>

            <article class="news-card visible">
                <div class="news-image" style="background-image: url('./media/news3.jpg');"></div>
                <div class="news-content">
                    <h3>Открытие мини-рынка</h3>
                    <p>Теперь в нашем комплексе доступен мини-рынок "Фермерский" с натуральной продукцией.</p>
                    <span class="news-date">02.11.2024</span>
                </div>
            </article>

            <article class="news-card visible">
                <div class="news-image" style="background-image: url('./media/news1.jpg');"></div>
                <div class="news-content">
                    <h3>Акция в магазинах одежды</h3>
                    <p>Скидки до 50% на летние коллекции в магазинах Zara, Columbia и Zolla до конца месяца.</p>
                    <span class="news-date">0.06.2025</span>
                </div>
            </article>
        </div>
        
        <button class="show-more-btn" id="showMoreBtn">Показать ещё</button>
    </section>

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