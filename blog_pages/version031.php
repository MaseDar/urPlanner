<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>URPLANNER</title>
    <!-- ------------------ LOGO ------------------ -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">
    <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <!-- ------------------  ------------------ -->
    <!------------- Подключаем bulma ------------>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <!--  -->
   <!-- -----------ANGULARJS--------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular-animate.min.js"></script>
    <!-- ----------------------------------------------- -->

   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/mystyles.css">


    <!-- <style>
      body { background: 
              url(https://images.squarespace-cdn.com/content/5a20387690bccee5e702f9c7/1542824914477-EC3M6PUCOIT02Z1W05NL/khai-sze-ong-308080-unsplash.jpg?format=2500w&content-type=image%2Fjpeg) no-repeat,
              url(https://storge.pic2.me/cm/1920x1080/624/fleohweb4mw6.jpg); 

              }
      
    </style> -->

    <script src="js/preview.js"></script>
  </head>


  <body >
    
   	
      
  <!--Чтобы убрать видимость section написать hero  -->
    

    <div class="section">
      
         <div class="article">
           <div class="article-header">
             <div class="container">
               <div class="columns is-centered">
                 <div class="column is-7-fullhd is-9-widescreen is-10-tablet">
                   <nav class="breadcrumb is-medium"> <ul> <li> <a href="\blog_page.php"><i class="fas fa-home is-small"></i></i><span>Blog</span></a> </li> <li class="is-active"> <a href="#"><span>Some bug fix & Version v0.3.1</span></a> </li> </ul> </nav>
                   <div class="content is-medium is-blog"> 
                      <h1 class="title is-spaced">Some bug fix & Version v0.3.1</h1> 
                      <p class="subtitle is-4"> Йо, рассказываю о своих последних внесеных измениях на нашем поприще с @Masedar </p> 
                      <p> <small>Written by Denis Zyablitsev | May, 13</small> </p> 
                      <p>‌‌‍‍‌‌‍‍  &#160;</p>
                    </div>
                 </div>
               </div>
             </div>
           </div>
          <!--  Вставка картинки -->
           <div class="article-cover">
             <div class="container">
               <div class="columns is-centered">
                 <div class="column is-7fullhd is-10-widescreen is-10-tablet">
                   <figure class="image is-16by9 "> <img style="border-radius: 20px;" alt="ReactJS" src="https://img3.goodfon.ru/original/1920x1200/2/7b/nebo-gory-skaly-derevya-osen.jpg"> </figure>
                  </div>
                </div>
              </div>
            </div>
            <p class="subtitle">‌‌‍‍‌‌‍‍  &#160;</p>
            <!-- Место для контента -->
            <div class="article-body">
              <div class="container">
                <div class="columns is-centered">
                  <div class="column is-7-fullhd is-9-widescreen is-10-tablet">
                    <div class="content is-medium is-blog"> 
                      <p class="subtitle"><b>Обновление тестового модуля, добавил:</b></p>
                      <ul>
                        <li>Ааутентичную анимацию на фон (<a href="https://github.com/VincentGarreau/particles.js">реализация</a>)</li>
                        <li>Категории для кейсов (Для себя & Для интеграции на сайт)</li>
                        <li>Возможность выбора этапа интеграции кейса на сайт (Ожидает интеграции & Интегрирован)</li>
                      </ul>

                      <p class="subtitle"><b>Сверстал страницу с блогом:</b></p>
                      <ul>
                        <li>Первые статьи уже написаны! 🥳</li>
                        <li>Находится в разработке</li>
                      </ul>

                      <p class="subtitle"><b>В интро регистрации сделал возможность загрузки фотографии из формы, в папку на сервере:</b></p>
                      <ul>
                        <li>Использовал только <a href="https://clck.ru/NRYEo">безопасные функции</a></li>
                      </ul>

                      <p class="subtitle"><b>Мелкие обновления:</b></p>
                      <ul>
                        <li>В <a href="\server/reg_case.php">регистрации</a> теперь можно переключать видимость пароля</li>
                        <li>Новые иконки в интро регистрации</li>
                        <li>Новые шаги в интро регистрации</li>
                        <li>Система рекомендаций умений в интро регистрации</li>
                        <li>Главная страница(main_page), теперь выглядит сносна</li>
                        <li>Исправил отображение страниц на телефоне(регистрацию & логин)</li>
                        <li>Fix: неправильное отображение ошибки почты</li>

                      </ul>
                    </div>

                      <p class="subtitle">‌‌‍‍‌‌‍‍  &#160;</p>

                     <!--  Об авторе -->
                      <p class="title">About the author:</p>
                      <p>
                        <div class="columns ">
                          <div class="column is-3">
                            <figure class="image is-square">
                              <img style="border-radius: 10px;" src="https://sun9-7.userapi.com/c834202/v834202484/755b3/5pEMJ0IgwvU.jpg" alt="">
                            </figure>
                          </div>
                          <div class="column is-9">
                            <p>im currently happy!</p><br>
                            <div class="field is-grouped">
                              <a  href="https://github.com/mujlax" class="button">
                                <span class="icon">
                                  <i class="fab fa-github"></i>
                                </span>
                                <span>GitHub</span>
                              </a>
                              <p>‌‌‍‍‌‌‍‍  &#160;</p>
                              <a  href="https://vk.com/mujjum" class="button">
                                <span class="icon">
                                  <i class="fab fa-vk"></i>
                                </span>
                                <span>Vk</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </p>
                  </div>
                </div>
              </div>
            </div>
         </div>
      
    </div>

   
</body>
</html>