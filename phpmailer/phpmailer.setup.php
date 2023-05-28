<?php
/* ====================
[BEGIN_COT_EXT]
Code=phpmailer
Name=PHPMailer_v.6.8.0
Description=Отправка почты через SMTP на основе релиза PHPMailer v.6.8.0 от 28.05.2023
Version=1.8.0
Date=2023-05-28
Author=PHPMailer, esclkm, Cotonti Team, webitproff,
Copyright=Copyright (c) Andy Prevost, PHPMailer, esclkm, Cotonti Team, webitproff,
Notes=
Auth_guests=RW
Lock_guests=12345A
Auth_members=RW
Lock_members=
[END_COT_EXT]
 
[BEGIN_COT_EXT_CONFIG]
SMTPAuth=01:string::1:SMTP Auth
SMTPSecure=02:string::TLS:SMTPSecure
Host=03:string:::Host-Сервер исходящей почты
Port=04:string:::Port
Username=05:string:::Username
Password=06:string:::Password
from=07:string:::email отправителя
from_name=08:string:::Имя отправителя
[END_COT_EXT_CONFIG]
==================== */

/**
 * PHPMailer для Cotonti Siena CMF 
 *
 * @version 1.8.0
 * @author PHPMailer, esclkm, Cotonti Team, webitproff (up to PHPMailer_v.6.8.0)
 * @copyright (c) PHPMailer, esclkm, Cotonti Team
 */

defined('COT_CODE') or die('Wrong URL');