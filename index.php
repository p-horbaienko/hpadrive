<?php
$page_title = 'Вантажні перевезення по Києву та Україні';
$page_keywords = "перевезення, доставка, вантаж";
$page_description = "Вантажні перевезення по Києву та Київській області. Доставка грузів. Телефонуйте та замовляйте! Більше 15 років досвіду!";

include "layouts/header.php";
?>
<div class="container">
	<div class="div-capital">
		<h1 class="h-capital">
			Вантажні перевезення по Києву та Київській області
		</h1>
		<img class="img-car" src="public/img/dostavka_kyiv_oblast_3.png" />
	</div>
	<div class="div-contacts-main">
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
	<div class="div-country">
		<img class="img-map" src="public/img/ukraine_dostavka.png" />
		<div class="h-country">
			Можливе перевезення по інших областях України.
			Деталі уточнюйте.
		</div>
	</div>
</div>
<div class="container">
	<h2 id="order">Як замовити?</h2>
	<div class="make-order">
		<div class="mo-div1">
			<div class="mo-div1-1">
				<i class="fas fa-phone"></i>
				<span class="mo-num">1</span>
			</div>
			<div>
				<h3>Зробіть замовлення</h3>
				<div>
					Зробіть нам дзвінок та повідомте інформацію щодо замовлення.
				</div>
			</div>
		</div>
		<div class="mo-div1">
			<div class="mo-div1-1">
				<i class="fas fa-truck-loading"></i>
				<span class="mo-num">2</span>
			</div>
			<div>
				<h3>Подача машини</h3>
				<div>
					Подача машини та завантаження.
				</div>
			</div>
		</div>
		<div class="mo-div1">
			<div  class="mo-div1-1">
				<i class="fa-solid fa-truck-fast"></i>
				<span class="mo-num">3</span>
			</div>
			<div>
				<h3>Доставка</h3>
				<div>
					Доставка вашого вантажу до місця прибуття.
				</div>
			</div>
		</div>
	</div>
	</div>
<div class="container">
	<h2 id="about">Про нас</h2>
	<div class="main-about">
		<div class="div-cut-about">
			<i class="fa-solid fa-face-smile"></i>
			<div class="ma-counter" data-value="1000">0</div>
			<span class="f-family-mont">Задоволених клієнтів</span>
		</div>
		<div class="div-cut-about">
			<i class="fa-solid fa-face-smile"></i>
			<div class="ma-counter" data-value="9000">0</div>
			<span class="f-family-mont">Перевезень та доставок</span>
		</div>
		<div class="div-cut-about">
			<i class="fa-solid fa-face-smile"></i>
			<div class="ma-counter" data-value="15">0</div>
			<span class="f-family-mont">Років досвіду</span>
		</div>
	</div>
</div>
<div class="container">
	<h2 id="vehicles">Наші автомобілі</h2>
	<div class="main-cars">
		<div class="mo-div1">
			<img class="img-car-delivery" src="public/img/dostavka_kyiv_oblast_4.png" alt="Перевезення по Києву та області">
			<h4></h4>
			<span class="car-capacity">3 т</span>
			<span class="car-from">800</span>
		</div>
		<div class="mo-div1">
			<img class="img-car-delivery" src="public/img/dostavka_kyiv_oblast_4.png" alt="Перевезення по Києву та області">
			<h4></h4>
			<span class="car-capacity">5 т</span>
			<span class="car-from">1000</span>
		</div>
		<div class="mo-div1">
			<img class="img-car-delivery" src="public/img/dostavka_kyiv_oblast_4.png" alt="Перевезення по Києву та області">
			<br>
			<span class="car-from-individual">Пошук автомобіля під потреби клієнтів</span>
		</div>
	</div>
</div>

<?php include(ROOT_PATH.'layouts/footer.php'); ?>
