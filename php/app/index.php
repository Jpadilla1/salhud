<?php
// setup the autoloading
// require 'vendor/autoload.php';

// // setup Propel
// require_once 'generated-conf/config.php';

// $app = new \Slim\Slim();
// $app->get('/', function () {
//     echo "Welcome!";
// });
// $app->get('/hello/:name', function ($name) {
//     echo "Hello, $name";
// });
// $app->get('/books/:id', function ($id) {
//     echo $id;
// });
// $app->run();

try{
    $dbh = new pdo( 'mysql:host=localhost;dbname=salhud',
                    'root',
                    'root',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}
 ?>