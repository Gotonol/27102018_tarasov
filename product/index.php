<?php 
  $cssFiles = [
    '/css/dist/catalog.css'
  ];
  include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

  $template = [
      'product'=>[],
      'sizes'=>[]
  ];

  if (isset($_GET['id']) ){
      $product_id = $_GET['id'];

  $sql = "SELECT * FROM products WHERE id={$product_id}";

      $result = mysqli_query($db, $sql);

      $template['product']= mysqli_fetch_assoc($result);

    $sql_sizes = "SELECT * FROM product_sizes WHERE product_id={$product_id}";
    $result_sizes = mysqli_query($db, $sql_sizes);
    

    while( $row = mysqli_fetch_assoc($result_sizes) ){
        $template['sizes'][] = $row;
    }

  }

  echo "<pre>";
  print_r($template['sizes']);
  echo "</pre>"


 !!!!
 

?>
<div class="product">
  <h1><?=$template['product']['name']?></h1>
  <p class="ptoducts__artic"><?=$template['product']['sku']?></p>
  <img src ="<?=$template['product']['photo']?>" class="products__img">
  <div class="products__text"><?=$template['product']['description']?></div>
  <div class="products_price"><?=$template['product']['price']?>.руб</div>
</div>
<div class="size">
  <?php foreach ($template['sizes'] as $size):?>
    <span><?=$size['size']?></span>
  <?php endforeach;?>
</div>

<?php 
  include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>