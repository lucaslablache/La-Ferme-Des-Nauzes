<?php
require 'Controleur/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();


// var_dump($GLOBALS);
// array (size=8)
//   '_GET' => 
//     array (size=0)
//       empty
//   '_POST' => 
//     array (size=0)
//       empty
//   '_COOKIE' => 
//     array (size=0)
//       empty
//   '_SERVER' => 
//     array (size=34)
//       'HTTP_HOST' => string 'laferme.local' (length=13)
//       'HTTP_CONNECTION' => string 'keep-alive' (length=10)
//       'HTTP_UPGRADE_INSECURE_REQUESTS' => string '1' (length=1)
//       'HTTP_USER_AGENT' => string 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36' (length=114)
//       'HTTP_ACCEPT' => string 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9' (length=135)
//       'HTTP_ACCEPT_ENCODING' => string 'gzip, deflate' (length=13)
//       'HTTP_ACCEPT_LANGUAGE' => string 'fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7' (length=35)
//       'PATH' => string 'C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;E:\Git\cmd;' (length=111)
//       'SystemRoot' => string 'C:\Windows' (length=10)
//       'COMSPEC' => string 'C:\Windows\system32\cmd.exe' (length=27)
//       'PATHEXT' => string '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC' (length=53)
//       'WINDIR' => string 'C:\Windows' (length=10)
//       'SERVER_SIGNATURE' => string '<address>Apache/2.4.39 (Win64) PHP/7.2.18 Server at laferme.local Port 80</address>
// ' (length=84)
//       'SERVER_SOFTWARE' => string 'Apache/2.4.39 (Win64) PHP/7.2.18' (length=32)
//       'SERVER_NAME' => string 'laferme.local' (length=13)
//       'SERVER_ADDR' => string '::1' (length=3)
//       'SERVER_PORT' => string '80' (length=2)
//       'REMOTE_ADDR' => string '::1' (length=3)
//       'DOCUMENT_ROOT' => string 'E:/Wamp/www/lafermedesnauzes' (length=28)
//       'REQUEST_SCHEME' => string 'http' (length=4)
//       'CONTEXT_PREFIX' => string '' (length=0)
//       'CONTEXT_DOCUMENT_ROOT' => string 'E:/Wamp/www/lafermedesnauzes' (length=28)
//       'SERVER_ADMIN' => string 'wampserver@wampserver.invalid' (length=29)
//       'SCRIPT_FILENAME' => string 'E:/Wamp/www/lafermedesnauzes/index.php' (length=38)
//       'REMOTE_PORT' => string '62630' (length=5)
//       'GATEWAY_INTERFACE' => string 'CGI/1.1' (length=7)
//       'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8)
//       'REQUEST_METHOD' => string 'GET' (length=3)
//       'QUERY_STRING' => string '' (length=0)
//       'REQUEST_URI' => string '/' (length=1)
//       'SCRIPT_NAME' => string '/index.php' (length=10)
//       'PHP_SELF' => string '/index.php' (length=10)
//       'REQUEST_TIME_FLOAT' => float 1603848890.58
//       'REQUEST_TIME' => int 1603848890
//   '_ENV' => 
//     array (size=0)
//       empty
//   '_REQUEST' => 
//     array (size=0)
//       empty
//   '_FILES' => 
//     array (size=0)
//       empty
//   'GLOBALS' => 
//     &array<