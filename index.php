<?php 
//This meta info should change for each page
$title = 'Fundación HELP | Página en construcción' ; 
$description = 'FUNDACION HELP es una organización de Educación e Investigación, habilitación y rehabilitación, sin ánimo de lucro, de utilidad común, de carácter privado, que promueve el mejoramiento de las condiciones, intelectuales, técnicas, tecnológicas, científicas, laborales, culturales, económicas, éticas y sociales de niños, jóvenes y adultos ubicados en zonas urbanas y rurales de Colombia.' ; 
$keywords = 'INSTITUCIÓN DE EDUCACIÓN, CAPACITACION, HABILITACION, REHABILITACION Y TRABAJO SOCIAL.' ; 
      ?>
    <?php include 'lib/head.php'; ?>
        <div class="gradient--radius">

        </div>
        <section style="filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2525b', endColorstr='#c52a33',GradientType=1 );">
            <div class="top-bar">
                <div class="left">
                    <h1 class="trajan">H.E.L.P</h1>

                </div>
                <div class="right">
                    <p>Estamos creando
                        <br>algo nuevo</p>
                </div>
            </div>
            <div class="main-image">
                <img src="img/logo.svg" alt="">
            </div>
            <div class="bottom-bar">


                <div class="right">
                    <p class="thankyou">¡Quiero ayudar!</p>
                    <div class="form--container">
                        <form action="" method="POST" enctype="" class="form" name="form">
                            <div class="mail">
                                <input type="email" placeholder="tucorreo@mail.com" name="email">
                            </div>
                            <div class="send">
                                <input type="submit" value="" placeholder="" name="send">
                                <i class="icon-right"></i>
                            </div>
                        </form>
                        <?php include 'lib/send-form.php'; ?>
                    </div>
                </div>
                <div class="left">
                    <div class="left--container">
                        <div class="icon"><a href="https://www.facebook.com/fundahelp/" target="_blank"><i class="icon-facebook"></i></a></div>
                        <div class="icon"><a href="https://www.instagram.com/fundacionh.e.l.p/" target="_blank"><i class="icon-instagram"></i></a></div>
                        <div class="icon"><a href="https://twitter.com/FundaHELP" target="_blank"><i class="icon-twitter"></i></a></div>
                        <div class="icon"><a href="https://www.youtube.com/" target="_blank"><i class="icon-youtube"></i></a></div>
                    </div>
                </div>

            </div>

        </section>

        <?php include 'lib/scripts.php'; ?>