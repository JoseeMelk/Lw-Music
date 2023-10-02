<?php
require_once('config/config.php');
require_once('app/controllers/index.php');
if(isset($_GET['direction'])){
    if(method_exists('ModelControler', $_GET['direction'])){
        ModelControler::{$_GET['direction']}();
    }
}else{
    ModelControler::Index();
}
