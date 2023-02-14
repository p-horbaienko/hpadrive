
<footer>
    <div class="container">
      <h2 id="contacts">Контакти</h2>
      <div class="f-contacts">
        <div >
          <h4 class="f-family-mont">Телефон</h4>
          <span class="d-block">
            <i class="fa fa-phone call"></i><a href="tel:<?php echo $contacts['phone']; ?>"><?php echo $contacts['phone']; ?></a>
          </span>
        </div>
        <div >
          <h4 class="f-family-mont">Інтернет</h4>
          <span class="d-block">
            <i class="fab fa-viber viber"></i><a href="viber://chat/?number=<?php echo $contacts['phone']; ?>"><?php echo $contacts['phone']; ?></a>
          </span>
        </div>
        <div >
          <h4 class="f-family-mont">Графік роботи</h4>
          <span class="d-block">
            <ul>
              <li>Пн - Пт 09:00 - 18:00</li>
              <li>Сб - вихідний (можливе замовлення по домовленності) </li>
              <li>Нд - вихідний</li>
            </ul>
          </span>
        </div>
      </div>
      <div class="f-copyright"><?php echo date("Y") ?> &copy; <?php echo $company_name; ?>. Перевезення вантажів</div>
    </div>
</footer>

</div>

<div id="move-to-top" title="Вгору"><i class="fa-solid fa-arrow-up"></i></div>

<!-- Scripts -->
<script type="text/javascript" src="../public/js/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="../public/js/js.cookie.min.js" charset="utf-8"></script>
<script type="text/javascript" src="../public/js/gsap.min.js"></script>
<script type="text/javascript" src="../public/js/ScrollTrigger.min.js"></script>

<script type="text/javascript" src="../public/js/script.js"></script>

<script src="https://kit.fontawesome.com/c4e645e38b.js" crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->

</body>
</html>
