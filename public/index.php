<?php 

require "../vendor/autoload.php";

use Ahmedmahfouz\Mvc\core\App;


\Ahmedmahfouz\Mvc\core\registry::set("db" , new \Ahmedmahfouzbackend\Database\DB(["localhost","root","","routedb"]));


new App();