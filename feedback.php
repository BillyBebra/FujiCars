<?php
  if (isset($_POST['submit_btn'])) {
    $to = "thebingodit@gmail.com";
    $from = "thebingodit@gmail.com";
    $subject = "Новая заявка на сайте";
    $message = "На сайте была заполнена форма обратной связи"."\r\n"
      ."<b>Тема:</b> ".$_POST['theme']."\r\n"
      ."<b>Ваше имя:</b> ".$_POST['name']."\r\n"
      ."<b>Ваш email:</b> ".$_POST['email']."\r\n"
      ."<b>Сообщение:</b> ".$_POST['message']."\r\n";
    $headers = "From: ".$from."\r\nContent-type: text/html; charset=utf-8\r\n";
    mail($to, $subject, $message, $headers);
  }
?>