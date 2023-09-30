<?php
include_once('./templates/header.php');
?>
<section class="section account section-account">
    <div class="container">
        <h2 class="account-title">Иван, здравствуйте!</h2>
        <div class="account-wrapper">
            <ul class="account-info">
                <li class="account-info-item">
                    <span class="account-info-item-title">Имя:</span>
                    <p class="account-info-item-text">Иван</p>
                </li>
                <li class="account-info-item">
                    <span class="account-info-item-title">Фамилия:</span>
                    <p class="account-info-item-text">Иванов</p>
                </li>
                <li class="account-info-item">
                    <span class="account-info-item-title">Отчество:</span>
                    <p class="account-info-item-text">Иванович</p>
                </li>
                <li class="account-info-item">
                    <span class="account-info-item-title">Пол:</span>
                    <p class="account-info-item-text">Мужской</p>
                </li>
                <li class="account-info-item">
                    <span class="account-info-item-title">Email:</span>
                    <p class="account-info-item-text">ivanov_Ivan@mail.ru</p>
                </li>
                <li class="account-info-item">
                    <span class="account-info-item-title">Номер телефона:</span>
                    <p class="account-info-item-text">+7 (999) 999 99-99</p>
                </li>
                <li class="account-info-item">
                    <span class="account-info-item-title">Место жительства:</span>
                    <p class="account-info-item-text">г.Барнаул, ул. Яблоневая 19</p>
                </li>
            </ul>
            <!-- /.account-info-item -->
            <div class="account-computation">
                <h3 class="account-computation-title">Информация о взносах</h3>
                <ul class="account-computation-list">
                    <li class="account-computation-item">
                        <span class="account-computation-item-title">Дата взноса:</span>
                        <p class="account-computation-item-text">25.10.2023</p>
                    </li>
                    <li class="account-computation-item">
                        <span class="account-computation-item-title">Сумма взноса:</span>
                        <p class="account-computation-item-text">9.999 ₽</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.account-wrapper -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section account section-account -->
<?php
include_once('./templates/footer.php');
?>