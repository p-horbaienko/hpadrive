<?php
$page_title = 'Home';
$page_keywords = "авто поліровка, полірування, хімчистка";
$page_description = "Detailex page description";
$currentPage='index';
include ('layouts/header.php');
?>

<div class="container">
  <div class="d-404">
    <h1>Перевезення по Києву, Київській області та Україні</h1>
    <img class="sign-404" src="/public/img/404_dostavka_kyiv.png" alt="Перевезення та доставка. Київ та область."/>

    <p>
      Сторінка не знайдена<br>
      ... щось пішло не так <i class="fa-solid fa-triangle-exclamation"></i> ...
    </p>
    <a class="link-to-mainpage" href="<?php echo $url; ?>">
      <i class="fa-solid fa-house"></i>
      <span>На головну</span>
    </a>
  </div>
</div>

<?php include('layouts/footer.php'); ?>
