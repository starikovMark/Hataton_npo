<?php include_once('./templates/header.php'); ?>
<section class="section login section login">
  <form action="#" class="form login-form">
    <h2 class="form-title">Регистрация</h2>
    <div class="input-group-wrapper">
      <div class="input-group">
        <input type="text" class="input" placeholder=" " />
        <label for="user_name" class="input-group-label">Имя</label>
      </div>
      <div class="input-group">
        <input type="text" class="input phone-mask" placeholder=" " />
        <label for="user_phone" class="input-group-label">Фамилия</label>
      </div>
      <div class="input-group">
        <input type="text" class="input phone-mask" placeholder=" " />
        <label for="user_phone" class="input-group-label">Отчество</label>
      </div>
      <div class="input-group">
        <input type="tel" class="input phone-mask" placeholder=" " />
        <label for="user_phone" class="input-group-label">Номер телефона</label>
      </div>
      <div class="input-group">
        <input type="email" class="input phone-mask" placeholder=" " />
        <label for="user_phone" class="input-group-label">Email</label>
      </div>
      <div class="input-group">
        <input type="password" class="input phone-mask" placeholder=" " />
        <label for="user_phone" class="input-group-label">Пароль</label>
      </div>
      <div class="input-group">
        <input type="password" class="input phone-mask" placeholder=" " />
        <label for="user_phone" class="input-group-label">Пароль</label>
      </div>
    </div>
    <!-- /.input-group-wrapper -->
    <a href="./account.php" class="button form-button">Зарегистрироваться</a>
  </form>
</section>
<!-- /.section login section login -->
<?php include_once("./templates/footer.php"); ?>