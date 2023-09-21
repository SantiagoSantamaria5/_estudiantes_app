<?php

namespace App\controllers\estudiantes;
use App\Controllers\EntityController;
use App\models\Estudiante;

class EstudianteController extends EntityController{
    
    function allData(){
        $sql = "select * from estudiantes";
        $resultSQL = $this-> execSql($sql);
        $lista = [];
        if ($resultSQL->num_rows >0){
            while ($item = $resultSQL ->fetch_assoc()){
                $estudiante = new Estudiante();
                $estudiante ->set('codigo', $item['codigo']);
                $estudiante ->set('nombre', $item['nombre']);
                $estudiante ->set('email', $item['email']);
                array_push($lista, $estudiante);
            }
        }
        return $lista;
    }

    function getItem($codigo){
        $sql = "select * from estudiantes where codigo=" .$codigo;
        $resultSQL = $this-> execSql($sql);
        $estudiante = null;
        if ($resultSQL->num_rows >0){
            while ($item = $resultSQL ->fetch_assoc()){
                $estudiante = new Estudiante();
                $estudiante ->set('codigo', $item['codigo']);
                $estudiante ->set('nombre', $item['nombre']);
                $estudiante ->set('email', $item['email']);
                break;
            }
        }
        return $estudiante;

    }

    function addItem($estudiante){


    }

    function updateItem($estudiante){


    }

    function deleteItem($codigo){


    }

}
?>
