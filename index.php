<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Мое портфолио</title>

  <link rel="stylesheet" href="styles.css">
</head>
<body>
  
  <header class="header">
    <nav class="navbar">
      <div class="logo"></div>
      <div class="nav-buttons">
        <a href="#about" class="button" id="aboutButton">Обо мне</a>
        <a href="#skili" class="button" id="skilliButton">Мои навыки</a>
        <a href="#contact" class="button smooth-scroll" id="contactButton">Контакты</a>
    </div>
    </nav>
  </header>
  

  <section class="fisrt">
  <h1 id="animatedText">Приветствую. Это мой первый сайт портфолио.</h1>
  <h2 id="animatedText">Вы можете воспользоваться кнопками навигации сверху что перемещаться по сайту</h2>
  </section>

  <section class="about-me">
    <h2 id="about">Обо мне</h2>
      <div class="fade-in card3 ">
        <p>Меня зовут Харьков Андрей. Мне 19 лет. С самого детства я интересуюсь различной техникой и компьюетрами. В один момент я понял что хочу свзять с этим жизнь.</p>
      </div>
      <div class="fade-in card3">
        <p>Я поступил на обучение в Донецкую академию управления и государственной службы. Увлекаться программированием я начал немного раньше поступления, заинтересовал меня язык Python</p>
      </div>
      <div class="fade-in card3">
        <p>Свой первый код я написал именно на нем, это был телеграм бот по продаже вещей</p>
        <a href="https://t.me/NoRollShopBot" target="_blank" class="button2" id="tgbot">Перейти к телеграм боту</a>
      </div>
      <div class="fade-in card3">
        <P>На данный момент я очень интересуюсь изучением HTML, CSS и JS. Конечно навыков у меня совсем мало, но вы можете поиграть в игру с котиком которую я написал изучая JS</P>
        <a href="catandmouse.html" target="_blank" class="button2">Поиграть с котом</a>
      </div>
      <div class="fade-in card-big">
      <?php
include 'portfoliodb.php'; // Подключаем файл с функциями работы с БД

openDB(); // Открываем соединение с БД

$sql = "SELECT * FROM projects ORDER BY created_at DESC LIMIT 5"; // Показываем 5 последних проектов
$result = $link->query($sql); // Используем $link вместо $conn

while ($row = $result->fetch_assoc()): ?>
    <div class="project">
        <h2><?= htmlspecialchars($row['title']) ?></h2>
        <p><?= htmlspecialchars($row['description']) ?></p>
        <a href="<?= htmlspecialchars($row['link']) ?>" target="_blank">Подробнее</a>
    </div>
    <hr>
<?php endwhile; ?>

<?php
closeDB(); // Закрываем соединение с БД
?>
      </div>
  </section>

  <section class="skills fade-in">
    <h2>Навыки</h2>
    <div class="skill-column">
      <div class="skill">
        <img src="images/394bd6373620272a2f9cce2fc3d77b5d.png" alt="HTML">
        <div class="progress-bar">
          <div class="progress fill-animation" style="--progress-value: 20%;">20%</div>
        </div>
      </div>
      <div class="skill">
        <img src="images/7909897ceea2691e5a4942766c678ff3.png" alt="CSS">
        <div class="progress-bar">
          <div class="progress fill-animation" style="--progress-value: 20%;">20%</div>
        </div>
      </div>
    </div>
    <div class="skill-column">
      <div class="skill">
        <img src="images/python.png" alt="Python">
        <div class="progress-bar">
          <div class="progress fill-animation" style="--progress-value: 35%;">35%</div>
        </div>
      </div>
      <div class="skill">
        <img src="images/CSharp-Logo-Vector.svg-.png" alt="Python">
        <div class="progress-bar">
          <div class="progress fill-animation" style="--progress-value: 25%;">25%</div>
        </div>
      </div>
    </div>
    <h2>Здесь представленна примерная оценка моих навыков в разлинчых языках программирования</h2>
  </section>
</section id="skillls">




  <section class="contact fade-in" id="contact">
    <h2>Связь</h2>
    <h3>Вы можете связаться со мной по следующим контактам:</h3>
    
    <p id="text">Вы можете связаться со мной по следующим контактам и соц.сетям:</p>
    <ul>
      <li><a href="https://t.me/smuutta" target="_blank"><img class='contact_pic'src="images/kak-nastroit-proxy-telegram-1.png"></a><a href="https://vk.com/smuutta" target="_blank"><img class='contact_pic' src='images/281271-vk-logotip-19.jpg'></a><a href='https://discordapp.com/users/296621699888316418/'target='_blank'><img class='contact_pic' src='images/07.png'></a></li>
      <li>Телефон: +7949ххххххх</li>  
    </ul>
  </section>
  


  <script src="main.js"></script>
  <script src="gsap.min.js"></script>
</body>
</html>