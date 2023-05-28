# Cot-PHPMailer_Cotonti_up_PHP8.1
Плагин для Cotonti отправки почты через SMTP на основе релиза [PHPMailer](https://github.com/PHPMailer/PHPMailer)  v.6.8.0 от 28.05.2023
<p><a href="https://raw.githubusercontent.com/webitproff/PHPMailer_Cotonti/main/PHPMailer_for_Cotonti_2023-05-28.png"><img loading="lazy" src="https://raw.githubusercontent.com/webitproff/PHPMailer_Cotonti/main/PHPMailer_for_Cotonti_2023-05-28.png" width="860" height="620" alt=""></a></p>

## Совместимость
Проверял на Cotonti 0.9.23 beta под php 8.1 на [хостинге без головной боли]( https://beget.com/p1479352)
## Installation

1. в папку с плагинами на сайте скопировать папку "phpmailer"
2. затем как админ зайти по адресу: Управление сайтом / Расширения / PHPMailer_v.6.8.0
3. Установить плагин и указать настройки подключения по примеру со скриншота.

## License
для свободного использования. 

Отправка писем через SMTP в PHPMailer

В последнее время письма отправляемые с хостингов через функции mail() и mb_send_mail() часто попадают в спам или совсем не доходят до адресатов. Альтернатива – это отправка e-mail через SMTP с реального почтового ящика.


Проект на GitHub.com [PHPMailer](https://github.com/PHPMailer/PHPMailer) 

<pre><code>
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '/PHPMailer/src/Exception.php';
require_once '/PHPMailer/src/PHPMailer.php';
require_once '/PHPMailer/src/SMTP.php';


$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';`
</code></pre>
 

// Настройки SMTP
<pre><code>
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';
</code></pre>

// От кого
<pre><code>
$mail->setFrom('mail@site.com', 'site.com');		
</code></pre>
// Кому
<pre><code>
$mail->addAddress('mail@site.com', 'Иван Петров');
</code></pre>
// Тема письма
<pre><code>
$mail->Subject = $subject;
</code></pre>
// Тело письма
<pre><code>
$body = '<p><strong>«Hello, world!» </strong></p>';

$mail->msgHTML($body);
</code></pre>
// Приложение
<pre><code>
$mail->addAttachment(__DIR__ . '/image.jpg');
</code></pre>
<pre><code>
$mail->send();
</code></pre>


Если при отправки писем возникает ошибка «Could not connect to SMTP host», то необходимо добавить следующие строки:
<pre><code>
$mail->SMTPOptions = array(
	'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
	)
);
</code></pre>

Яндекс Почта
<pre><code>
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = 'Логин@yandex.ru';
$mail->Password = 'Пароль';
</code></pre>

В настройках почты нужно разрешить доступ к почтовому ящику с помощью почтовых клиентов:
Разрешить доступ к почтовому ящику с помощью почтовых клиентов в Яндекс почте

Mail.ru
<pre><code>
$mail->Host = 'ssl://smtp.mail.ru'; 
$mail->Port = 465; 
$mail->Username = 'Логин@mail.ru'; 
$mail->Password = 'Пароль'; 
</code></pre>

Gmail
<pre><code>
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'Логин@gmail.com';
$mail->Password = 'Пароль';
</code></pre>

Если возникает ошибка при отправки почты, то нужно отключить двухфакторную авторизацию и разблокировать «ненадежные приложения» в настройках конфиденциальности аккаунта https://myaccount.google.com/security?pli=1
Отключить двухфакторную авторизацию Gmail
Разблокировать «ненадежные приложения» в настройках Gmail

Рамблер
<pre><code>
$mail->Host = 'ssl://smtp.rambler.ru';
$mail->Port = 465;
$mail->Username = 'Логин@rambler.ru';
$mail->Password = 'Пароль';
</code></pre>

iCloud
<pre><code>
$mail->Host = 'ssl://smtp.mail.me.com';
$mail->Port = 587;
$mail->Username = 'Логин@icloud.com';
$mail->Password = 'Пароль';
</code></pre>
Бегет — beget.com
<pre><code>
$mail->Host = 'ssl://smtp.beget.com';
$mail->Port = 465;
$mail->Username = 'Логин@домен.ru';
$mail->Password = 'Пароль';
</code></pre>

Мастерхост
<pre><code>
$mail->Host = 'ssl://smtp.masterhost.ru';
$mail->Port = 465;
$mail->Username = 'Логин@домен.ru';
$mail->Password = 'Пароль';
</code></pre>

Timeweb
Лимит – 2000 писем в день, но не более 5 в секунду.
<pre><code>
$mail->Host = 'ssl://smtp.timeweb.ru';
$mail->Port = 465;
$mail->Username = 'Логин@домен.ru';
$mail->Password = 'Пароль';
</code></pre>

Хостинг Центр (hc.ru)

Доступ к сторонним почтовым серверам по SMTP-портам (25, 465, 587) ограничен, разрешена отправка не более 300 сообщений в сутки.
<pre><code>
$mail->Host = 'smtp.домен.ru';
$mail->SMTPSecure = 'TLS';
$mail->Port = 25;
$mail->Username = 'Логин@домен.ru';
$mail->Password = 'Пароль';
</code></pre>

REG.RU

Лимит – 3000 писем в день.
<pre><code>
$mail->Host = 'ssl://serverXXX.hosting.reg.ru';
$mail->Port = 465;
$mail->Username = 'Логин@домен.ru';
$mail->Password = 'Пароль';
</code></pre>

Имя сервера можно узнать в разделе «Информация о включенных сервисах и паролях доступа»:
Имя сервера на reg.ru

ДЖИНО

В разделе «Услуги» нужно включить опцию «SMTP-сервер»:
У jino.ru нужно включить опцию «SMTP-сервер»
<pre><code>
$mail->Host = 'ssl://smtp.jino.ru';
$mail->Port = 465;
$mail->Username = 'Логин@домен.ru';
$mail->Password = 'Пароль';
</code></pre>

nic.ru

В настройках веб-сервера необходимо включить PHP расширение «openssl».
<pre><code>
$mail->Host = 'ssl://mail.nic.ru';
$mail->Port = 465;
$mail->Username = 'Логин@домен.ru';
$mail->Password = 'Пароль';
</code></pre>

Спринтхост — sprinthost.ru
<pre><code>
$mail->Host = 'ssl://smtp.ВАШ_ДОМЕН';
$mail->Port = 465;
$mail->Username = 'Логин@домен.ru';
$mail->Password = 'Пароль';
</code></pre>

