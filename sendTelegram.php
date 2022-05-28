


<?php
// /*получаем значения полей из формы*/
// $subject = $_GET['subject'];
// $name = $_GET['name'];
// $tel = $_GET['tel'];
// $email = $_GET['email'];
// $message = $_GET['message'];

// /*функция для создания запроса на сервер Telegram */
// function parser($url){
//     $curl = curl_init();
//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//     $result = curl_exec($curl);
//     if($result == false){     
//       echo "Помилка:" . curl_error($curl);
//       return false;
//     }
//     else{
       
//       return true;
//     }
// }


// function orderSendTelagram($message){

// /*токен который выдаётся при регистрации бота */
// $token = "5513003219:AAH7xr5WANZ26koKipSmwZWgVa5eOVepGX4";
// /*идентификатор группы*/
// $chat_id = "-692106554";
// /*делаем запрос и отправляем сообщение*/
// parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}");

// }

// /*собираем сообщение*/
// $textMessage .= "Назва:".$subject."\n";
// $textMessage .= "Ім'я:".$name."\n";
// $textMessage .= "Телефон:".$tel."\n";
// $textMessage .= "Email:".$email."\n";
// $textMessage .= "Коментарій:".$message."\n";
// $textMessage =urlencode($textMessage);

// orderSendTelagram($textMessage);

$to = "vasild232@gmail.com"; // емайл получателя данных из формы
$tema = "Форма обратной связи на PHP"; // тема полученного емайла
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>


<!-- 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
<title>Дякую за замовлення! Ми вам зателефонуємо!</title>


</head>
<body>
<div class="flex-container">
    <div class="container">
        <div class="row">
        <span class="flex-item">
            <img src="https://i.gifer.com/VAyR.gif">
        </span>
        </div>
        <div class="row">
        <h1>Дякую за замовлення! Ми вам зателефонуємо!</h1>
        </div>
    </div>
</div>

<style>
    html, body {
        height: 100%;
        max-height: 100%;
        margin: 0;
        padding: 0;
    }

    .flex-container {
        display: flex;
        height: 100%;
        border-radius: 10px;
        border: 1px solid #fff;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: auto;
    }
    img {
        padding: 5px;
    }
</style>
<script type="text/javascript">
setTimeout('location.replace("index.htm")', 3000);
</script> 
</body>
</html> -->