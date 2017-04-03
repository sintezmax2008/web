<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['mail'])&&$_POST['mail']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'technoyar@ukr.net,oooizolit@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Письмо с сайта technoyar.org'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p><br>
                        <p>E-mail: '.$_POST['mail'].'</p><br>
                        <p>Телефон: '.$_POST['phone'].'</p><br>
                        <p>Сообщение: '.$_POST['message'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Technoyar.org <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
        header('Location: /');
exit;
}
?>