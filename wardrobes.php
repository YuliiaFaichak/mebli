<?php
include('send.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mebli</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="description" content="This is a wonderful services page of the Free Hotel Website Template provided by TemplateMonster."/>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="ie_png.js"></script>
   <script type="text/javascript">
       ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');
   </script>
<![endif]-->
</head>

<body id="page1" onload="new ElementMaxHeight();">
	<div id="main">
		<!-- header -->
		<div id="header">
			<div class="row-1">
         	<div class="wrapper">
            	<div class="logo">
               	<h1><a href="home.html">MEBLI</a></h1>
                  <em>меблевий салон</em>
               </div>
            </div>
         </div>
			<div class="row-2">
         	<div class="indent">
               <!-- header-box begin -->
               <div class="header-box">
                  <div class="inner">
                     <ul class="nav">
                        <li><a href="index.php">Головна</a></li>
                        <li><a href="wardrobes.php" class="current">Шафи</a></li>
                        <li><a href="soft.php">М'які меблі</a></li>
                        <li><a href="tables.php">Столи</a></li>
                        <li><a href="contacts.php">Контакти</a></li>
                        <li><a href="about.php">Про нас</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
		</div>
		<div id="content">
			<div class="wrapper">
            <div class="aside maxheight">
            	<!-- box begin -->
               <div class="box maxheight">
               	<div class="inner">
                     <h3>Замовити дзвінок:</h3>
                     <form id="reservation-form" action="" method="POST">
                        <input  type="text" name="surName" placeholder="Прізвище" />
                        <input  type="text" name="name" placeholder="Ім'я" /> <br/>
                        <input id="num" type="text" name="num" placeholder="Номер телефону" />
                        <textarea placeholder="Коментар" id="textarea" name="textarea" style="width:153px; height:100;"></textarea><br/> <br/> 
                        
                            <input id="inputsubmit1" type="submit" name="inputsubmit1" value="ВІДПРАВИТИ"/>   <br/>
                    </form>
                     
                  </div>
               </div>
            </div>
            <div class="content">
            	<div class="indent">
                  <img class="img-indent png" alt="" src="img/shafa1.png" width="150px"/>
                  <p class="alt-top">Шафа Вінтаж - 5000грн<br/><br/><br/>

                  <div class="clear"></div>
                  <img class="img-indent png" alt="" src="img/shafa2.png" width="150px"/>
                  <p class="alt-top">Шафа Брюсель 9000грн<br/><br/><br/><br/><br/>


                  <div class="clear"></div>
                  <img class="img-indent png" alt="" src="img/shafa4.png" width="150px"/>
                  <p class="alt-top">Шафа "Меблева розкіш" 10000грн<br/><br/><br/><br/><br/><br/><br/>
                  
                  <div class="clear"></div>
                  <img class="img-indent png" alt="" src="img/shafa5.png" width="150px"/>
                  <p class="alt-top">Шафа "Меблева розкіш" 10000грн<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

                  <div class="line-hor"></div>
                  <div class="wrapper line-ver">
                  	<div class="col-1">
                     	<h3>Спеціальні пропозиції</h3>
                        <ul>
                        	<li>Можливість індивідуального замовлення</li>
                           <li>10% знижка на передзамовлення</li>
                           <li>20% Знижка за повну передоплату</li>
                           <li>Безкоштовна доставка в будь-яку точку міста</li>
                        </ul>
                     </div>
                     <div class="col-2">
                     	<h3>Розташування</h3>
                        <p>Ми знаходимось у центрі Львова на площі А. Міцкевича 1</p>
                        <dl class="contacts-list">
                           <dd>093-123-54-76</dd>
                        	<dd>067-234-56-87</dd>
                        </dl>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		</div>
		<div id="footer">
      	<ul class="nav">
         	<li><a href="index.php">Головна</a>|</li>
            <li><a href="wardrobes.php">Шафи</a>|</li>
            <li><a href="soft.php">М'які меблі</a>|</li>
            <li><a href="tables.php">Столи</a>|</li>
            <li><a href="contacts.php">Контакти</a>|</li>
            <li><a href="about.php">Про нас</a></li>
         </ul>

      </div>
	</div>
</body>
</html>