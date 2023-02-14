<?php
$page_title = 'Питання і пропозиції. Вантажні перевезення по Києву та Україні';
$page_keywords = "перевезення, доставка, вантаж, питання доставки";
$page_description = "Вантажні перевезення по Києву та Київській області. 
Якщо у вас є питання чи пропозиції - телефонуйте прямо зараз! Більше 15 років досвіду!";

include ('../layouts/header.php');
?>

<div class="container">
  <div class="d-info">
    <h1>Співпраця та пропозиції</h1>
    <i class="fa-solid fa-handshake"></i>
    <p>
    З питань співпраці та пропозицій звертайтесь за контактними даними:
    </p>
    <div class="div-contacts-main m-2 ">
  		<a class="call" href="tel:<?php echo $contacts['phone']; ?>">
  			<div >
  				<i class="fas fa-phone"></i>
  			</div>
  			<div >
  				<span class="d-block f-family-mont">Подзвонити</span>
  				<span class="d-block"><?php echo $contacts['phone']; ?></span>
  			</div>
  		</a>
  		<a class="viber" href="viber://chat/?number=<?php echo $contacts['phone']; ?>">
  			<div >
  				<i class="fab fa-viber"></i>
  			</div>
  			<div >
  				<span class="d-block f-family-mont">Написати</span>
  				<span class="d-block"><?php echo $contacts['phone']; ?></span>
  			</div>
  		</a>
  	</div>
    <a class="link-to-mainpage" href="<?php echo $url; ?>">
      <i class="fa-solid fa-house"></i>
      <span>На головну</span>
    </a>
  </div>
</div>

<?php include ROOT_PATH.'layouts/footer.php'; ?>
