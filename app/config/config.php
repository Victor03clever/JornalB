<?php



global $base_url;
global $auth;
global $projecto;



$base_url = getenv('BASE_URL')? getenv('BASE_URL'):'http://localhost:8080/JornalB';
$auth = getenv('AUTH_SESSION_KEY')? getenv('AUTH_SESSION_KEY'):'AUTH_USER';
$projecto = getenv('APP_NAME')? getenv('APP_NAME'):'Projecto';


define('URL',$base_url);
define('AUTH_SESSION_KEY',$auth);
define('APP_NAME',$projecto);
define('APP', dirname(__FILE__));

define('DB',[
    'HOST'=>"localhost",
    'PORT'=>"3306",
    'USER'=>"root",
    'PASS'=>"",
    'DBNAME'=>"jornal",
    'SGBD'=>"mysql"
]);

// constantes para o navbar e footer para normal user
    define('NAVBAR', dirname(__DIR__).DIRECTORY_SEPARATOR."Views".DIRECTORY_SEPARATOR."layouts".DIRECTORY_SEPARATOR."navbar.php");
    define('FOOTER', dirname(__DIR__).DIRECTORY_SEPARATOR."Views".DIRECTORY_SEPARATOR."layouts".DIRECTORY_SEPARATOR."footer.php");



