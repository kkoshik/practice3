<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="./css/aboutus.css">
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

    <div class="about-header">
        <h1>Добро пожаловать в "Сити Центр"</h1>
        <p>Торгово-развлекательный комплекс европейского уровня</p>
    </div>
    
    <div class="container">
        <div class="about-section">
            <h2>О нашем комплексе</h2>
            <p>ТРК "Сити Центр" спроектирован по образцу европейских торговых центров, где приятно совершать покупки в фирменных магазинах, совмещая их с семейным отдыхом.</p>
            
            <p>Мы создали особую атмосферу - прогуливаясь по уютной внутренней улочке City Street, вы можете отдохнуть у фонтанов в окружении цветочных клумб и старинных фонарей. На всей территории комплекса доступен бесплатный Wi-Fi.</p>
        </div>
        
        <div class="about-section">
            <h2>Для наших гостей</h2>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <h3>Шоппинг</h3>
                    <p>Более 30 магазинов известных торговых марок Европы. Некоторые бренды представлены на Дальнем Востоке только у нас.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Детям</h3>
                    <p>Детский развлекательный центр "Сити Гейм" с безопасными игровыми площадками и аттракционами.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Рестораны</h3>
                    <p>Кафе всемирно известных сетей и уютные рестораны с летними верандами.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-parking"></i>
                    </div>
                    <h3>Парковка</h3>
                    <p>Просторная парковка для вашего удобства.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-walking"></i>
                    </div>
                    <h3>Набережная</h3>
                    <p>Великолепная зона отдыха с беговыми дорожками, детской площадкой и фонтанами.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>Удобства</h3>
                    <p>Комфортная атмосфера и все необходимые услуги для приятного времяпрепровождения.</p>
                </div>
            </div>
        </div>
        
        <div class="about-section">
            <h2>Мы ждём вас!</h2>
            <p>"Сити Центр" дарит вам возможность сделать покупки в фирменных магазинах и приятно провести время с друзьями и семьёй.</p>
            <p>Приходите, вы сами всё увидите, попробуете, сделаете покупки и отдохнёте. Будем рады видеть вас среди наших постоянных гостей!</p>
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