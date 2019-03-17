<?php 
  $cssFiles = [
    '/css/dist/catalog.css'
  ];
  include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>
    <main>
    <div class="catalog-header">
      <div class="catalog__header-flex">
        <h1 class="catalog__header-item">мужчинам</h1>
        <p class="catalog__text">Все товары</p>
      </div>
    </div>
      <div class="catalog">

      </div>
      <div class="pagination"></div>
    </main>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>