<?php

if (isset($_POST['submit'])) {
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */
    $to = "kiryxer@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = "kirillb2000@gmail.com"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply(собака)epicblog.net

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

/* Проверка правильного написания e-mail адреса */
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
        show_error("<br /> Е-mail адрес не существует");
    }

/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
    $mail_to_myemail = "Здравствуйте!
    Было отправлено сообщение с сайта!
    Имя отправителя: $name
    E-mail: $email
    Текст сообщения: $message
    Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";

    /* $headers = "From: $from \r\n"; */

/* Отправка сообщения, с помощью функции mail() */
    mail($to, $subject, $mail_to_myemail /* $headers */ . 'Content-type: text/plain; charset=utf-8');
    echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
    echo "<br /><br /><a href='contact.html'>Вернуться на сайт.</a>";
}
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="contact.html");}
window.setTimeout("changeurl();",3000);
</script>
