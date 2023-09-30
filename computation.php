<?php
include_once('./templates/header.php');
?>
<section class="section computation section-computation">
    <div class="container">
        <div class="computation-text">
            <h2 class="computation-text-title">Наш сервис поможет Вам спрогнозировать размер и периодичность взносов!
            </h2>
            <p class="computation-text-text">Наш сервис предлагает услуги по прогнозированию размера и периодичности
                взносов для участников негосударственного пенсионного обеспечения (НПФ). Мы используем передовые
                технологии машинного обучения и анализа данных, чтобы предоставить нашим клиентам наиболее точные
                прогнозы. Наша команда экспертов работает круглосуточно, чтобы обеспечить быстрое и эффективное решение
                любых задач, связанных с взносами.</p>
        </div>
        <div class="computation-wrapper">
            <form action="#" class="form computation-form">
                <h3 class="form-title computation-form-title">Спрогнозируйте взнос</h3>
                <div class="input-group-wrapper computation-input-group-wrapper">
                    <div class="input-group">
                        <input type="text" class="input" placeholder=" " />
                        <label for="user_name" class="input-group-label">Ваш доход</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class="input phone-mask" placeholder=" " />
                        <label for="user_phone" class="input-group-label">Желаемая сумма взноса</label>
                    </div>
                    <div class="input-group">
                        <input type="number" class="input phone-mask" placeholder=" " />
                        <label for="user_phone" class="input-group-label">Периодичность взноса</label>
                    </div>
                </div>
                <!-- /.input-group-wrapper -->
                <div class="computation-form-button">
                    <button class="computation-form-button-button">Рассчитать</button>
                </div>

            </form>
        </div>

    </div>
    <!-- /.container -->
</section>
<!-- /.section computation section-computation -->
<?php include_once('./templates/footer.php'); ?>