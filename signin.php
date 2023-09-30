<?php include_once('./templates/header.php'); ?>
<section class="section login section login">
  <form action="./register.php" class="form login-form" method="post">
    <h2 class="form-title">Регистрация</h2>
    <div class="input-group-wrapper">
      <div class="input-group">
        <input type="text" class="input" placeholder=" " name="firstname" />
        <label for="user_name" class="input-group-label">Имя</label>
      </div>
      <div class="input-group">
        <input type="text" class="input phone-mask" placeholder=" " name="lastname" />
        <label for="user_phone" class="input-group-label">Фамилия</label>
      </div>
      <div class="input-group">
        <input type="text" class="input phone-mask" placeholder=" " name="middlename" />
        <label for="user_phone" class="input-group-label">Отчество</label>
      </div>
      <div class="input-group">
        <input type="tel" class="input phone-mask" placeholder=" " name="tel" />
        <label for="user_phone" class="input-group-label">Номер телефона</label>
      </div>
      <div class="input-group">
        <input type="email" class="input phone-mask" placeholder=" " name="email" />
        <label for="user_phone" class="input-group-label">Email</label>
      </div>
      <div class="input-group">
        <input type="password" class="input phone-mask" placeholder=" " name="pass" />
        <label for="user_phone" class="input-group-label">Пароль</label>
      </div>
      <div class="input-group">
        <input type="password" class="input phone-mask" placeholder=" " name="repeatpass" />
        <label for="user_phone" class="input-group-label">Пароль</label>
      </div>
    </div>
    <!-- /.input-group-wrapper -->
    <button class="button form-button" type="submit">Зарегистрироваться</button>
  </form>
</section>
<!-- /.section login section login -->
<?php include_once("./templates/footer.php"); ?>