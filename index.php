<?php 
  $cssFiles = [
    '/css/dist/main.css'
  ];
  include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>
<main> 
  <div class="slogan">
    <div>
      <h1 class="main__slogan">новые поступления весны</h1>
      <p class="main__text">Мы подготовили для Вас лучшие новинки сезона</p>
      <div class="main__button">посмотреть новинки</div>
    </div>
  </div>
  <div class="bloks">
    <div class="bloks__item">джинсовые куртки <br>New Arrival</div>
    <div class="bloks__item"> <img class="bloks__item_pic1"> каждый сезон мы <br> подготавливаем для Вас<br> исключительно лучшую <br>модну одежду. Следит за<br> нашими новинками</div>
    <div class="bloks__item"></div>
    <div class="bloks__item"> &#8592<br> Элегантная обувь<br> ботинки, кросовки</div>
    <div class="bloks__item">джинсы <br> от 3200 руб.</div>
    <div class="bloks__item"><img class="bloks__item_pic2">Самые низкие цены в<br> Москве.<br> Нашли дешевле? Вернем <br>разницу.</div>
    <div class="bloks__item"></div>
    <div class="bloks__item"> &#8592 <br>  Аксессуары</div>
    <div class="bloks__item">Спортивная <br>одежда<br> от 590 руб.</div>
    <div class="bloks__item">детская одежда <br> New Arrival</div>
  </div> 
  <div class="subscription">
    <div>
      <h2 class="subscription__main">буть всегда вкурсе выгодных предложений</h2>
      <p class="subscription__text">подписывайся и следи за новинками и выгодными предложениями</p>
      <div class="flex__form">
      <form action="">
        <input class="subscription__email" type="email" name="email" id="" value="email">
      </form>
      <div class="subscription__button">записаться</div>
      </div>
    </div>
  </div>
</main>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>