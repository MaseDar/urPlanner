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
                   <nav class="breadcrumb is-medium"> <ul> <li> <a href="\blog_page.php"><i class="fas fa-home is-small"></i></i><span>Blog</span></a> </li> <li class="is-active"> <a href="#"><span>ReactJS</span></a> </li> </ul> </nav>
                   <div class="content is-medium is-blog"> 
                      <h1 class="title is-spaced"> Мы переходим на ReactJS </h1> 
                      <p class="subtitle is-4"> Йоху, пытаемся перенести наш сервис на ReactJS. Как это было - читайте далее! </p> 
                      <p> <small>Written by Vladislav Molotkov</small> </p> 
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
                   <figure class="image is-16by9 "> <img style="border-radius: 20px;" alt="ReactJS" src="https://million-wallpapers.ru/wallpapers/6/36/294164368938419/rokki-gornye-vershiny-osen.jpg"> </figure>
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
                      <p><b>Цель:</b> Хочу ReactJS на фронт, PHP на бэк!<br>
                      <b>Проблема:</b> Как?<br>
                      <b>Решение:</b> XAMPP — сервер с бд, ReactJS — фронт.<br></p>

                      <p><b>Как сделать так, чтобы ReactJS работал с XAMPP?</b></p>

                      <p>Так как мы создавали свой 1 проект на React с помощью</p>

                      <p><div style="background: #BFBFBF;" class="box has-text-dark"><i>$ npx create-react-app my-app <br>
                      $ cd my-app<br> 
                      $ npm start <br></i>
                      </div>
                      https://learn-reactjs.ru/introduction/create-a-new-react-app</p>

                      <p>то показалось, что React - целое приложение, и чтобы оно работало, нужно обязательно запускать npm start. Но почитав, мы поняли, что такого нам не нужно. Мы хотели запускать сервер на XAMPP, а чтобы React выступал в качестве frontend фреймворка. Позже мы поняли, что npm start запускает Node.js, а нам этого не нужно.</p>

                      <p>Так вот, перерыв большое количество сайтов, мы поняли, что возможный выход - <b>добавление CDN на наш сайт.</b>
                      https://learn-reactjs.ru/introduction/cdn-links</p>

                      <p>Попробовали написать простую прилу на React. Будучи новичками в этом деле, захотели вывести jsx код в отдельный файл, а не в тегах script. Не получилось - стали дальше искать в интернете, как вывести jsx код в отдельный файл. Не нашли,и не хотели использовать компиляцию babel, ведь кому он нафиг нужен?) Плюнули, пошли читать про то, как все таки совместить react+xampp.</p>

                      <p><b>Нашли такое:</b> https://stackoverflow.com/questions/55615623/how-do-i-use-react-and-xampp-together</p>

                      <p>Попробовали. Ужас, как в реал-тайме это все делать? Очень громоздко и долго + неэффективно.</p>

                      <p>Решили искать еще выходы.<br>
                      На данном этапе задумались: <b>Почему, вроде бы, на простые вопросы в интернете так мало ответов?</b><br>
                      1. То, что ты хочешь сделать — не верно, так не делается.<br>
                      2. Все очень просто, но ты не видишь.</p>

                      <p>После размышлений мы поняли, что так не делается и пошли все заново просматривать.
                      В итоге мы поняли, что были слепые и использование CDN нам как раз подходит.<br>
                      В статье https://learn-reactjs.ru/introduction/add-react-to-a-web-site описывается, как можно за пару минут поставить react на сайт, и писать на jsx в отдельном файле, но пришлось все таки использовать babel)</p>

                      <p><b>Сделали так:</b></p>

                      <p>Закинули в C:/xampp/htdocs/folder_project все наши файлы (index.php, index.js)<br>
                      ПРОЧИТАЛИ ВНИМАТЕЛЬНО СТАТЬЮ https://learn-reactjs.ru/introduction/add-react-to-a-web-site
                      Установили babel в проект:<br>
                      Перейдите в папку вашего проекта и вставьте в консоль эти две команды по очереди(папка должна быть на латинице):</p>

                      <p><div style="background: #BFBFBF;" class="box has-text-dark"><i>$ npm init -y<br>
                      $ npm install babel-cli@6 babel-preset-react-app@3</i></div>
                      4. Создали папку src, кинули туда файл с jsx кодом (index.js).<br>
                      5. Запустили компиляцию babel, которая из src/index.js создает такой же файл index.js но с js кодом, вместо jsx, командой:</p>

                      <p><div style="background: #BFBFBF;" class="box has-text-dark"><i>npx babel --watch src --out-dir . --presets react-app/prod</i></div>
                      6. Запустили сервер<br>
                      7. ПОСМОТРЕЛИ НА РЕЗУЛЬТАТ — УРА!</p>

                      <p>Мы смогли настроить ReactJS + XAMPP, надеюсь)</p>

                      <p><b>В чем была наша проблема, и почему мы потратили целый день на такую фигню, как React+XAMPP? Вы че, ту-ту?</b></p>

                      <p>— Непонимание, что такое ReactJS и с чем его едят, невнимательность при прочтении https://learn-reactjs.ru + малое количество опыта.</p> </div>

                      <p class="subtitle">‌‌‍‍‌‌‍‍  &#160;</p>

                     <!--  Об авторе -->
                      <p class="title">About the author:</p>
                      <p>
                        <div class="columns ">
                          <div class="column is-3">
                            <figure class="image is-2by3">
                              <img style="border-radius: 10px;" src="https://sun9-12.userapi.com/c630430/v630430932/3cfe9/HrExYa_-47s.jpg" alt="">
                            </figure>
                          </div>
                          <div class="column is-9">
                            <p>Проходил курсы на FructCode, учавствовал в TensorHack, полгода занимаюсь тестированием сервсиов в VK Testers, начал писать собственный сайт urPlanner.ru для более глубокой WEB-разработки, с использованием фреймворка Bulma, Sass, JQuery, Angular, PHP. Занимаюсь видеомонтажом, немного изучал разработку на движке Unity.</p><br>
                            <div class="field is-grouped">
                              <a  href="https://github.com/MaseDar" class="button">
                                <span class="icon">
                                  <i class="fab fa-github"></i>
                                </span>
                                <span>GitHub</span>
                              </a>
                              <p>‌‌‍‍‌‌‍‍  &#160;</p>
                              <a  href="https://vk.com/masedar" class="button">
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