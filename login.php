<?php include_once('./templates/header.php'); ?>
<section class="section login section login">
  <form action="./etrance.php" class="form login-form" method="post">
    <h2 class="form-title">Вход в личный кабинет</h2>
    <div class="input-group-wrapper">
      <div class="input-group">
        <input type="text" class="input" placeholder=" " name="email" />
        <label for="user_name" class="input-group-label">Email</label>
      </div>
      <div class="input-group">
        <input type="password" class="input phone-mask" placeholder=" " name="pass" />
        <label for="user_phone" class="input-group-label">Пароль</label>
      </div>
    </div>
    <!-- /.input-group-wrapper -->
    <button class="button form-button" type="submit">Войти</button>
    <a href="./signin.php" class="form-signin-text">Зарегистрироваться</a>
  </form>
</section>
<!-- /.section login section login -->
<?php include_once("./templates/footer.php"); ?>