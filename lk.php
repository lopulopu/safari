<!Doctype html>
<html>
<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" type="text/css" href="1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="icon" href="Safari_media_small_png.png">
        <meta charset="UTF-8"> 
        <title>Личный кабинет</title> 
        <script src="jquery-3.5.1.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name = “author” content = "Vladislav Khabarov">
        <!-- navbar -->  
         <nav class="navbar navbar-expand-lg fixed-top ">  
             <a class="navbar-brand"><img src="22.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
             <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">     <ul class="navbar-nav mr-4">
             <li class="nav-item">
                 <a class="nav-link" data-value="about" href="1.html">Главная</a>        </li>  
            <li class="nav-item">
                <a class="nav-link " data-value="blog"href="1.html">Выйти</a>    
             </li>

            </div></nav>
    </head>

  <body>
       <div class="about2" > 
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-12">
                    <img alt="logo" class="img-thumbnail" src="nofoto.jpg"> 
                </div>
               <div class="col-lg-8 col-md-8 col-sm-12 desc">
                 <div class="hpanel">
                        <div class="hpanel">
                            <h2>Профиль</h2>
                                <p>Добро пожаловать в личный кабинет пользователя!</p>

                                <div class="tab">
                                  <button class="tablinks" onclick="openCity(event, 'London')">Оставить заявку</button>
                                  <button class="tablinks" onclick="openCity(event, 'Paris')">Магазин</button>
                                  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Изменить профиль</button>
                                </div>
                                <div id="London" class="tabcontent">
                                <h3>Сферы услуг</h3>
                                <div class="title">Вы можете выбрать сразу несколько сфер</div>     
                                <div>
                                 <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Продвижение в соцсетях
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Разработка сайта
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Брендирование
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Производство видео
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Маркетинг
                                  </label>
                                </div>
                                </div>
                                
                                <div>
                                <h3>Услуги</h3>
                                <div class="title">Вы можете выбрать одну и более услуг из выбранных сфер</div>     
                                <div>
                                 <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Продвижение в соцсетях
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Разработка сайта
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Брендирование
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Производство видео
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Маркетинг
                                  </label>
                                </div>
                                 </div>

                                 <h3>Суммарный бюджет</h3>
                                <div class="title">Планируемый бюджет на проект</div>     
                                <div class="form-check-inline">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Менее 40000 рублей
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    40000-80000 рублей
                                  </label>
                                </div>

                                <div class="form-check-inline">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                  <label class="form-check-label" for="flexRadioDefault3">
                                    80000-100000 рублей
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                  <label class="form-check-label" for="flexRadioDefault4">
                                    Более 100000 рублей
                                  </label>
                                </div>

                                 <h3>Задача проекта</h3>
                                <div class="title">Поставьте нам задачу, и мы найдем решение</div> 
                                    <textarea name="brief-des"></textarea>
                                    <span class="bar"></span>
                                    <label>Введите описание задачи</label>
                                </div>                                                               
                            </div>

                            
                               
                                <div id="Paris" class="tabcontent">
                                  <section class="menu-content">
                                    <?php   

                                    $mysql_login = 'root';
                                    $mysql_host = 'localhost';
                                    $mysql_pass = '';
                                    $mysql_db = 'lab4';

                                  $connect = mysqli_connect($mysql_host, $mysql_login, $mysql_pass, $mysql_db, "3306");
                                      $connect->set_charset("utf8");
                                      if (mysqli_connect_errno()) {
                                        echo "Не могу подключиться к БД MySQL: ".mysqli_connect_error();
                                        exit;
                                      }

                                    $sql1 = "SELECT * FROM products WHERE availability='yes'";
                                    $result1 = mysqli_query($connect,$sql1);

                                    if(mysqli_num_rows($result1) > 0) {
                                      while($row1 = mysqli_fetch_assoc($result1)){
                                              $id = $row1["id"];
                                              $name = $row1["name"];
                                              $img = $row1["image"];
                                              $price = $row1["price"];
                                              $desc = $row1["desc"];
                                              $link = $row1["link"];
                                              ?>
                                      <!--<a href="booking.php?id=<?php echo($id) ?>">-->
                                      <div class="sub-menu">
                                      

                                      <img class="card-img-top" src="<?php echo $img; ?>" alt="Нет фото">
                                      <h5><b> <?php echo $name; ?> </b></h5>
                                      <h6> Цена: <?php echo ($price . "рублей"); ?></h6>
                                      <h6> Описание: <?php echo ($desc); ?></h6>
                                      <button type="button" class="btn text-dark button"><h5>Заказать</h5></button>
                                      
                                      </div> 
                                      </a>
                                      <?php }
                                    }
                                      else {
                                    ?>
                                    <h1> Доступных товаров нет :( </h1>
                                    <?php
                                    }
                                    ?>                                
                                 <!--  <h3>Товары</h3>
                                  <p>Здесь вы можете заказать товары в нашем рекламном агентстве</p> 
                            
                                   <div class="card-deck">
                                      <div class="card">
                                        <img src="img/1.jpg" class="card-img-top" >
                                        <div class="card-body">
                                          <h5 class="card-title">Худи Сафари</h5>
                                          <p class="card-text">Мерч рекламного агентства на котором ты можешь оставить индивидуальный дизайн</p>
                                        </div>
                                        <div class="card-footer">
                                          <small class="text-muted"> От 1400 рублей за толстовку</small>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <img src="img/2.jpg" class="card-img-top" >
                                        <div class="card-body">
                                          <h5 class="card-title">Визитки и стикеры</h5>
                                          <p class="card-text">Создадим необходимую символику вашей компании в современном дизайне</p>
                                        </div>
                                        <div class="card-footer">
                                          <small class="text-muted">От 150 рублей за визитку</small>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <img src="img/3.jpg" class="card-img-top" >
                                        <div class="card-body">
                                          <h5 class="card-title">Футболки с индивидуальным дизайном</h5>
                                          <p class="card-text">Вышивка или принт индивидуального дизайна футболок для вашего бизнеса</p>
                                        </div>
                                        <div class="card-footer">
                                          <small class="text-muted">От 1100 за футболку</small>
                                        </div>
                                      </div>

                                    </div>
                                    -->

                                </div>
                                 

                                <div id="Tokyo" class="tabcontent">
                                  <h3>Tokyo</h3>
                                  <p>Tokyo is the capital of Japan.</p>
                                </div>

                                <script>
                                function openCity(evt, cityName) {
                                    var i, tabcontent, tablinks;
                                    tabcontent = document.getElementsByClassName("tabcontent");
                                    for (i = 0; i < tabcontent.length; i++) {
                                        tabcontent[i].style.display = "none";
                                    }
                                    tablinks = document.getElementsByClassName("tablinks");
                                    for (i = 0; i < tablinks.length; i++) {
                                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                                    }
                                    document.getElementById(cityName).style.display = "block";
                                    evt.currentTarget.className += " active";
                                }
                                </script>  

                                </div>
                       
                    </div>
                 </div>
            </div>
        </div>
      </body>                      

        <!-- Footer -->
    <footer class="new_footer_area bg_color" id="contact">
                <div class="new_footer_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="footer_bg">
                        <div class="footer_bg_one"></div>
                        <div class="footer_bg_two"></div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-7">
                                <p class="mb-0 f_400">© Дипломная работа, 2022.</p>
                            </div>
                            <div class="col-lg-6 col-sm-5 text-right">
                                <p>Автор <i class="icon_heart"></i> : <a href="https://instagram.com/khabarov16">Хабаров Владислав</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
 </html>