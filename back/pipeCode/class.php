<?php

class Usuario {

    protected $cargo;

    // inyectar cargos en sql
    protected $cargos =[
        "1" => "Admin",
        "2" =>"Usuario",
        "3"=>"Cliente",
        "4" =>"Trabajador"
    ];
    
    function __construct(
        private string $User_name,
        private int $User_pass,
    ){}

    function _setCargo(){
        $a =$this->cargos['1'];
        $this ->cargo = $a;
    }

    function _getCargo(){
        echo
        "El cargo actual del usuario es: " . $this->cargo;
        return $this->cargo;
    }

}


class Login  extends Usuario{

    function __construct (

        private string $login_username,
        private int $login_pass,
        private bool $accesed = false

    ){}

    function _compareUser(){

        if($this->cargo){

        }

    }

    function _getCargos(){
        foreach($this ->cargos as $clave => $valor){
            echo "El output es> " . $clave . " con el valor de> " . $valor ."<br>";
        }


    }

    function _getAccess(){
       echo "El acceso ha sido validado";
    }

}

$a = new Login("pipe","123","");
$a->_setCargo();
$a->_getCargos();
$a->_getCargo();







?>
