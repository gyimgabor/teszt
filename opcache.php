<?php

if(isset($_GET['config'])){
var_dump(opcache_get_configuration());

}elseif(isset($_GET['status'])){
var_dump(opcache_get_status());

}
