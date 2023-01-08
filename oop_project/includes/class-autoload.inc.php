<?php

spl_autoload_register(function ($className) {
    include "myClasses/".$className.".php";
});

 ?>
 