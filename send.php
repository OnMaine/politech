<?php
// можно несколько получателей
$to  = 'onmaine@gmail.com';

// тема письма
$subject = 'Данные с формы сайта Politech';

// текст письма
$message =  '<table style="max-width:600px; padding:5px; width:100%; background-color: #000000; color: #ffffff; font: 20px Georgia, serif; font-weight: bold;">'. '<thead style="background-color: #000000;">'. '<tr>'. '<td style="color: #fbd38d; font-weight: bold; font: 40px Georgia, serif;">' .'PoliTech'. '</td>' . '</tr>' . '</thead>'.  '<tbody style="background: #1c1e2f">' . '<tr>'. '<td>' . 'Имя:' .'</td>'. '<td>' . $_POST['name'] . '</td>' . '</tr>' .
 '<tr>'. '<td>' . 'Фамилия:' .'</td>'. '<td>' . $_POST['surName'] . '</td>' . '</tr>'. '<tr>' . '<td>' . 'Номер телефона:' . '</td>' .
  '<td>' . $_POST['phone'] . '</td>' . '</tr>' . '<tr>' . '<td>'. '@mail' . '</td>' . '<td>' . '<a href="mailto: ' . $_POST['email'] . ' "> '. $_POST['email'] . '</a>' . '</td>' .
   '</tr>' . '</tbody>' .  '</table>' . '<table style="max-width:600px; padding:5px; width:100%; background-color: #000000; color: #ffffff; font: 20px Georgia, serif; font-weight: bold;">'. '<tr>'. '<td style="background: #1c1e2f">' . 'Комментарий:' . '<br />'. '<br />'. $_POST['textarea'] . '</td>' . '</tr>'. '</table>';



// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



// Отправляем
if (mail($to, $subject, $message, $headers))
 {      header( "Location: https://aapolitest.000webhostapp.com" );
} else {
    echo "error";
}

?>
