<?php 
include_once('./templates/header.php');
?>
    <section class="section hero section-hero">
      <div class="container">
        <div class="hero-wrapper">
          <img src="./img/family.jpeg" alt="Family" class="hero-image" />
          <div class="hero-text">
            <h1 class="hero-text-title">
              Сервис прогнозирования размера и периодичности взносов участников НПО
            </h1>
            <p class="hero-text-subtitle">
              Наш сервис предназначен для помощи участникам НПО в планировании
              своих будущих пенсионных накоплений. Мы предоставляем удобный
              инструмент для расчета ожидаемого размера ежемесячного взноса и
              периодаичность его выплаты. Наш сервис поможет вам спланировать
              вашу пенсию заранее и избежать неприятных сюрпризов в будущем.
            </p>
            <a href="#" class="hero-text-button">Расчитать взнос</a>
          </div>
        </div>
        <!-- /.hero-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section hero section-hero -->
    <section class="slider section">
      <div class="container">
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide">
              <img
                src="./img/news-1.jpg"
                alt="News-1"
                class="swiper-slide-image"
              />
              <div class="swiper-slide-text">
                <h2 class="swiper-slide-title">
                  С 2024 года пенсии россиян вырастут на 7,5%
                </h2>
                <p class="swiper-slide-subtitle">
                  Пенсии неработающим россиянам проиндексируют на 7,5% в 2024
                  году
                </p>
              </div>
            </a>
            <a href="#" class="swiper-slide">
              <img
                src="./img/news-2.jpg"
                alt="News-2"
                class="swiper-slide-image"
              />
              <div class="swiper-slide-text">
                <h2 class="swiper-slide-title">
                  Россиянам напомнили об особых надбавках к пенсии
                </h2>
                <p class="swiper-slide-subtitle">
                  Гражданам России, которые начали работать до 2002 года,
                  рассчитывают пенсию с надбавками.
                </p>
              </div>
            </a>
            <a href="#" class="swiper-slide">
              <img
                src="./img/news-3.jpg"
                alt="News-3"
                class="swiper-slide-image"
              />
              <div class="swiper-slide-text">
                <h2 class="swiper-slide-title">
                  Народный артист России Пашутин похвастался пенсией почти в 100
                  тысяч рублей
                </h2>
                <p class="swiper-slide-subtitle">
                  Актер Пашутин заявил, что получает большую пенсию из-за работы
                  в театре
                </p>
              </div>
            </a>
            <a href="#" class="swiper-slide">
              <img
                src="./img/news-4.webp"
                alt="News-4"
                class="swiper-slide-image"
              />
              <div class="swiper-slide-text">
                <h2 class="swiper-slide-title">
                  Страховые взносы ИП 2023: как рассчитать, уплатить, можно ли
                  уменьшить
                </h2>
              </div>
            </a>
            <a href="#" class="swiper-slide">
              <img
                src="./img/news-5.webp"
                alt="News-5"
                class="swiper-slide-image"
              />
              <div class="swiper-slide-text">
                <h2 class="swiper-slide-title">
                  Счетная палата заявила о профиците бюджета ПФР в 2022 году
                </h2>
                <p class="swiper-slide-subtitle">
                  Пенсионный фонд России закончил 2022 год с профицитом в 1,1
                  триллиона рублей
                </p>
              </div>
            </a>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.slider -->
<?php include_once("./templates/footer.php")?>
