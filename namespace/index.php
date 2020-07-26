<?php
require_once 'App/init.php';


// $apel = new Apel();
// $apel->setWarna("Merah");
// echo $apel->caraMakan();

use App\Buah\User as BuahUser;
use App\Service\User as ServiceUser;

new BuahUser();
echo "<br>";
new ServiceUser();