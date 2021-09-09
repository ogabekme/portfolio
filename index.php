<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Rakhimov | Portfolio</title>
</head>
<body>

    <div id="home">

        <div class="header">

            <div class="logo">
                ra<div class="red">kh</div>imov
            </div>

            <div class="navs">

               <?php 
                if(isset($_GET['lang'])){
                    if($_GET['lang'] == 'uz'){
                        ?>
                        <a href="#home" class="active">bosh sahifa</a>
                        <a href="#about">haqida</a>
                        <a href="#porfolio">porfolio</a>
                        <a href="#contact">aloqa</a>
                        <?php
                    }
                    elseif($_GET['lang'] == 'ru'){
                        ?>
                        <a style="font-family : 'Montserrat'" href="#home" class="active">главное меню</a>
                        <a style="font-family : 'Montserrat'" href="#about">информации</a>
                        <a style="font-family : 'Montserrat'" href="#porfolio">портфолио</a>
                        <a style="font-family : 'Montserrat'" href="#contact">контакт</a>
                        <?php
                    }
                }else {
                    ?>
                    
                <a href="#home" class="active">home</a>
                <a href="#about">about</a>
                <a href="#porfolio">porfolio</a>
                <a href="#contact">contact</a>
                
                <?php
                }
               ?>

            </div>

            <div class="lang">
                <a href="./">en</a> |
                <a href="?lang=ru">ru</a> |
                <a href="?lang=uz">uz</a>
            </div>

        </div>
        <br>
        <div class="sectionOne">
            <div class="label">
                rakhimov<br><div class="redOne">ogabek</div>
            </div>
            <br>
            <div class="text">
                <div class="red">frontend</div> | backend <br>
                <?php 
                
                    if(isset($_GET['lang'])){
                        if($_GET['lang'] == 'uz'){
                            ?>
                            O'zbekistondagi full-stack web dasturchi
                            <?php
                        }elseif($_GET['lang'] == 'ru') {
                            ?> 
                            <div style="font-family : 'Montserrat'"> Фулстек веб разработчиком в Узбекистане</div>
                            <?php
                        }
                    }else {
                        ?>  
                        I'm a full-stack web developer <br> from Uzbekistan
                        <?php
                    }
                
                ?> <br>
            </div>
            <br>
            <div class="moreBtn">
            <?php 
                
                if(isset($_GET['lang'])){
                    if($_GET['lang'] == 'uz'){
                        ?>
                        malumot uchun <div class="redOne"><a href="#about">Haqida</a> bo'limiga o'ting</div>
                        <?php
                    }
                    elseif($_GET['lang'] == 'ru'){
                        ?>
                        <div style="font-family : 'Montserrat';">Нажмите для  <div class="redOne"><a href="#about">информации</a></div></div> 
                        <?php
                    }
                }else {
                    ?>  
                    for more <div class="redOne">go to <a href="#about">About</a></div>
                    <?php
                }
            
            ?>
            </div>
            <div class="socials">
                <div class="facebook">
                    <i class="fa fa-facebook"></i><div class="text-soc">facebook</div>
                </div>
                <div class="insta">
                    <i class="fa fa-instagram"></i><div class="text-soc">instagram</div>
                </div>
                <div class="telegram">
                    <i class="fa fa-telegram"></i><div class="text-soc">telegram</div>
                </div>
            </div>
        </div>


        
        <div class="sectionTwo">
                <div class="card card-background">
                    <div class="card-number">01</div>
                    <?php 
                
                if(isset($_GET['lang'])){
                    if($_GET['lang'] == 'uz'){
                        ?>
                        <div class="card-label">3 yillik tajriba</div>
                        <div class="card-text">Dasturchi sifatida 2018 yildan beri ishlab kelmoqdaman</div>
                        <?php
                    }
                    if($_GET['lang'] == 'ru'){
                        ?>
                        <div class="card-label" style="font-family : 'Montserrat'">3 года опыта</div>
                        <div class="card-text" style="font-family : 'Montserrat'">Программистом работаю с 2018 года</div>
                        <?php
                    }
                }else {
                    ?>  
                    <div class="card-label">3 years experience</div>
                    <div class="card-text">I have started working as web developer since 2018 and I have a three-year experience</div>
                    <?php
                }
            
            ?>
                </div>
                <div class="card">
                    <div class="card-number">02</div>
                    <?php 
                
                if(isset($_GET['lang'])){
                    if($_GET['lang'] == 'uz'){
                        ?>
                         <div class="card-label">30+ ortiq  loyihalar</div>
                        <div class="card-text">Ish boshlaganimdan buyon 30 dan ortiq loyihalar bilan ishladim</div>
                        <?php
                    }
                    elseif($_GET['lang'] == 'ru'){
                        ?>
                         <div class="card-label"  style="font-family : 'Montserrat'">Более 30+ проектов</div>
                        <div class="card-text"  style="font-family : 'Montserrat'">С момента основания я работал над более чем 30 проектами</div>
                        <?php
                    }
                }else {
                    ?>  
                    <div class="card-label">3 years experience</div>
                    <div class="card-text">I have started working as web developer since 2018 and I have a three-year experience</div>
                    <?php
                }
            
            ?>
                </div>
        </div>


    </div>

    <div id="about">

    </div>

    <div id="porfolio">

    </div>
    
    <div id="contact">
        
    </div>    

</body>
</html>