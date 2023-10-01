<?php
class ModelDataBase{
    private $Model;
    private $DataBase;
     public $Users;

    public function __construct(){
        $this->Model = array();
        $this->DataBase = new PDO('mysql:host = localhost; dbname=Lw_Music', "root", "melk");
    }

    public function Insert($Table, $Data){
        $MysqlQuery = 'insert into'.$Table.' values(null, '.$Data.')';
        $Result = $this->DataBase->query($MysqlQuery);
        if($Result){
            return true;
        }else{
            return false;
        }
    }

    public function Show($Table, $Condition){
        $MysqlQuery = 'select *from'.$Table.' where '.$Condition.';';
        $Result = $this->DataBase->query($MysqlQuery);
        while($Rows = $Result->FETCHALL(PDO::FETCH_ASSOC)){
            $this->Users[]= $Rows;
        }
        return $this->Users;
    }

    public function Update($Table, $Data, $Condition){
        $MysqlQuery = 'update '.$Table.' set '.$Data.' where '.$Condition;
        $Result = $this->DataBase->query($MysqlQuery);
        if($Result){
            return true;
        }else{
            return false;
        }
    }

    public function Delete($Table, $Condition){
        $MysqlQuery = 'delete from '.$Table.' where '.$Condition;
        $Result = $this->DataBase->query($MysqlQuery);
        if($Result){
            return true;
        }else{
            return false;
        }
    }
}