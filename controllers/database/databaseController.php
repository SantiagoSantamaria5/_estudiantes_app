<?php
namespace App\Controllers\database;

use mysqli;

class DatabaseController{
   private  $BD_HOST = 'localhost';
   private  $DB_USER = 'root';
   private  $DB_PWD = '';
   private  $DB_NAME ='estudiantes_db';
   private $conx;

   function __construct(){
        $this -> conx = new mysqli (
        $this-> BD_HOST,
        $this-> DB_USER ,
        $this-> DB_PWD ,
        $this-> DB_NAME);
   }

   function execSql ($sql){
    $result = $this -> conx -> query($sql);
    $this ->conx->close ();
    return $result;
   }
}

?>
