<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<link rel="icon" href="img/logo.png" type="image/x-icon">
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="style1.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<title>Test</title>
</head>
<body>


<div class="cl1">


<div class="im1">
	<img class="logo" src="img/ic-logo.svg">
	<img class="dat" src="img/dat.png">
<p class="komp">Комплекс из камеры <br>  и мобильного приложения,<br> который помогает<br>  в любой момент <br>убедиться, что с близкими и домом всё в порядке.</p>

</div>

</div>


<div class="cam"> 
	<div style="display: inline-block !important; width: 960px;">
	<div id="cam1">
	
	<a onclick="disp1()" href="#openpo1dal"><img class="cams" src="img/cam.png"><div id="sh1"></div>
<p class="podr">Подробнее</p></div></a>

<div id="cam2">
	
	<a onclick="disp2()" href="#openpo2dal"><img class="cams" src="img/cam.png"><div id="sh2"></div>
<p class="podr">Подробнее</p></div></a>

</div>
</div>












<div class="pr">
	<p id="prio">Приобрести</p>
	
	
<div class="pok"><img id="pok" src="img/pok.svg"> <p id="txtpok">Покупка</p></div>
<div id="sh11"></div>


<div class="ras"><img id="pok1" src="img/ras.svg"> <p id="txtpok">Рассрочка</p></div>
<div id="sh22"></div>

<div class="paketvse"><img id="pok2" src="img/paket1.svg"> <p class="paketdl" id="txtpok">Пакет <br>
"Все под контролем"</p></div>
<div id="sh33"></div>


<div class="pakettis"><img id="pok3" src="img/paket2.svg"> <p class="paketdl" id="txtpok">Пакет <br>“Тысяча пятьсот”</p></div>
<div id="sh44"></div>


</div>
<div class="zaya">





	<div class="zayabg"><p id="onsucc">Спасибо, что оставили заявку. 
Мы скоро вам перезвоним.</p><p id="zaya">Оставьте заявку, и мы позвоним вам <br> в ближайшее время</p>
<form method="POST" id="wdh_form" action="javascript:succ()">
<p  id="st">
<input type="tel" class="tel"  name="tell"  required=""   placeholder="+7 (999) 999 9999" id="number" ></p>

<button id="otpr1"><p id="txtotpr">отправить заявку  <img id="sendfly" src="img/send.svg"></p></button><p id="otpr2"></p>
</form>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){
$('#otpr1').on('click', function () {

 var form_data = $(this).serialize(); //собераем все данные из формы
                $.ajax({
                type: 'POST', //Метод отправки
                url: 'php.php', //путь до php фаила отправителя
                data: $("#wdh_form").serialize(),
                        success: function(data){ // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
                        // пoкaжeм eё тeкст
                        }
                });
        });
    });    
















</script>


















	<div class="zayash"></div>

</div>
<div class="comment">
	<p id="nameotz">
		Отзывы
	</p>
	<div id="comment1">
		<img class="ava" src="img/ava.png">
<p class="name">Алексей Гоно</p>
<p id="tsx1" class="otziv"> Отличное и удобное приложение. Классные возможности, отзывчивая поддержка.</p>
<img onclick="myFunction1()" class="down" src="img/down.png">


	</div>

<div id="comment2">
	<img class="ava" src="img/ava.png">
<p class="name">Алексей Гоно</p>
<p id="tsx2" class="otziv"> Отличное и удобное приложение. Классные возможности, отзывчивая поддержка.</p>
<img onclick="myFunction2()" class="down" src="img/down.png">


</div>

<div id="comment3">
	<img class="ava" src="img/ava.png">
<p class="name">Алексей Гоно</p>
<p id="tsx3" class="otziv"> Отличное и удобное приложение. Классные возможности, отзывчивая поддержка.</p>
<img onclick="myFunction3()" class="down" src="img/down.png">


</div>





</div>
<script type="text/javascript">

function succ() {
var element = document.getElementById("zaya");
   element.classList.add("display2");
var element = document.getElementById("st");
   element.classList.add("display2");
var element = document.getElementById("otpr2");
   element.classList.add("display2");


var element = document.getElementById("otpr1");
   element.classList.add("onsuc");
var element = document.getElementById("onsucc");
   element.classList.add("display1");




}


	
function myFunction1() {
   var element = document.getElementById("comment1");
   element.classList.toggle("f1sli3");
   element.classList.remove("f3sli1");
var element = document.getElementById("comment2");
   element.classList.toggle("f1sli1");
   element.classList.remove("f3sli2");
var element = document.getElementById("comment3");
   element.classList.toggle("f1sli2");
   element.classList.remove("f3sli3");


 var element = document.getElementById("tsx1");
   element.classList.remove("tsx2");
   element.classList.toggle("tsx1");






   var element = document.getElementById("tsx2");
   element.classList.remove("tsx1"); 
   element.classList.toggle("tsx2");

 

}
function myFunction2() {
   var element = document.getElementById("comment1");
   element.classList.toggle("f2sli2");
   element.classList.remove("f1sli3");
var element = document.getElementById("comment2");
   element.classList.toggle("f2sli3");
   element.classList.remove("f1sli1");
var element = document.getElementById("comment3");
   element.classList.toggle("f2sli1");
	element.classList.remove("f1sli2");





 var element = document.getElementById("tsx2");
   element.classList.remove("tsx2");
   element.classList.toggle("tsx1");




var element = document.getElementById("tsx3");
   element.classList.toggle("tsx2");
   element.classList.remove("tsx1");

}
function myFunction3() {
   var element = document.getElementById("comment1");
   element.classList.toggle("f3sli1");
   element.classList.remove("f2sli2");
var element = document.getElementById("comment2");
   element.classList.toggle("f3sli2");
   element.classList.remove("f2sli3");
var element = document.getElementById("comment3");
   element.classList.toggle("f3sli3");
	element.classList.remove("f2sli1");



	var element = document.getElementById("tsx3");

   element.classList.remove("tsx2");
   element.classList.toggle("tsx1");


var element = document.getElementById("tsx1");
   element.classList.toggle("tsx2");
   element.classList.remove("tsx1");



}

function disp1()
{


	var element = document.getElementById("openpo1dal");
   element.classList.toggle("display1");

}
function disp2()
{

	var element = document.getElementById("openpo2dal");
   element.classList.toggle("display1");
}
function rem()
{


	var element = document.getElementById("openpo1dal");
   element.classList.remove("display1");
var element = document.getElementById("openpo2dal");
   element.classList.remove("display1");
}


</script>


<div id="openpo1dal" class="po1dal">

	<div id="fake"></div>
  <div class="tb1"><div id="kryg"><img id="noga" src="img/noga.png"></div> <p id="txt1">Уведомление на телефон  о движении</p></div>
  <div class="tb2"><div id="kryg"><img id="serv" src="img/serv.png"></div> <p id="txt1">Хранение данных на защищенных серверах</p></div>
  <div class="tb3"><div id="kryg"><img id="access" src="img/access.png"></div> <p id="txt1">Совместный доступ  у членов<br> семьи
</p></div>
  <div class="tb4"><div id="kryg"><img id="archiv" src="img/archiv.png"></div> <p id="txt1">Скачивание/ <br>удаление архивных записей</p></div>
  <div class="tb5"><div id="kryg"><img id="geo" src="img/geo.png"></div> <p id="txt1">Доступ  из любой <br>  точки мира</p></div>
  <div class="tb6"><div id="kryg"><img id="noti" src="img/noti.png"></div> <p id="txt1">Уведомление о приходе «Домашних»</p></div>
<div class="fonpod">  <a onclick="rem()" href="#close" title="Close" class="close"><img src="img/close.png"></a></div>

<div id="lef"><img id="bgsmart" src="img/bgsmart.png"><img id="smart" src="img/smart.png"></div>
            </div>






<div style="left: 100px;" id="openpo2dal" class="po1dal">

	<div id="fake"></div>
  <div class="tb1"><div id="kryg"><img id="noga" src="img/wifi.svg"></div> <p id="txt1">Работает по Wi-Fi или кабелю</p></div>
  <div class="tb2"><div id="kryg"><img id="serv" src="img/hd.png"></div> <p id="txt1">Разрешение 1280х960 (HD)</p></div>
  <div class="tb3"><div id="kryg"><img id="access" src="img/night.png"></div> <p id="txt1">Ночная съемка
</p></div>
  <div class="tb4"><div id="kryg"><img style="width: 90.25px;
height: 63.44px;left: 20px;
top: 30px;" id="archiv" src="img/rec.png"></div> <p id="txt1">Запись звука и видео</p></div>
  <div class="tb5"><div id="kryg"><img style="
width: 81.51px;
height: 61.11px;
left: 25px;
" id="geo" src="img/ygol.png"></div> <p id="txt1">Угол обзора 100°</p></div>
  <div class="tb6"><div id="kryg"><img id="noti" src="img/noti.png"></div> <p id="txt1">Длина кабеля  1.5 метра</p></div>
<div class="fonpod">  <a onclick="rem()" href="#close" title="Close" style="left: -100px;" class="close"><img src="img/close.png"></a></div>

<div id="lef"><img id="bgsmart2" src="img/bgsmart.png"><img id="smart2" src="img/camin.png"></div>
            </div>























<footer></footer>
<script>
window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('.tel'), function(input) {
    var keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+7 (___) ___ ____",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 5)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)

  });

});
  </script>
</body>
</html>