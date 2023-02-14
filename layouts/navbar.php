<input id="toggle" type="checkbox"></input>

<label for="toggle" class="hamburger">
  <div class="top-bun"></div>
  <div class="meat"></div>
  <div class="bottom-bun"></div>
</label>

<div class="nav">
  <div class="nav-wrapper">
    <nav>
        <a href="<?php echo $routes['main']; ?>">Головна</a>
        <a href="<?php echo $routes['order']; ?>" data-id='order'>Як замовити?</a>
        <a href="<?php echo $routes['about']; ?>" data-id='about'>Про нас</a>
        <a href="<?php echo $routes['info']; ?>">Інформація</a>
        <a href="<?php echo $routes['cooperation']; ?>">Співпраця</a>
        <a href="<?php echo $routes['contacts']; ?>" data-id='contacts'>Контакти</a>
    </nav>
  </div>
</div>