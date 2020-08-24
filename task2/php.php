
<?php





// Отправляем


    if(mail('deodesta@yandex.ru', 'Письмо с моего сайта', $_POST['tell'],'Content-type: text/html; charset=utf-8')){
                            echo "<script> console.log('Ez')</script>";
                        }else{
                            echo "<script> console.log('Notez!!!')</script>";
                        }   
?>