<?php

class Login{

    public $user ="";
    public $password ="";
    public $usu ="sas@gmail.com";
    public $pass ="123";
    public $cadena ="true";
    public $cadena2 ="false";

    function entrarDatos($variable1,$variable2){
        $this ->user = $variable1;
        $this ->password = $variable2;
    }

    function logear(){

        $us = $this->usu;
        $ps = $this->pass;

        $us1 = $this->user;
        $pas1 = $this->password;

        if(($us === $us1) && ($ps === $pas1)){
            return $this->cadena;
        } else{
            return $this->cadena2;
        }
    }
}

class Lista{
    public $array = [
        "Texto" => array(
            "<ul class='list-grouppy-4'>",
            "<h4 class='list-group'>Dashboard</h4><br>",
            "<h4 class='list-group'>Product</h4><br>",
            "<h4 class='list-group'>Order list</h4><br>",
            "<h4 class='list-group'>Analytics</h4><br>",
            "<h4 class='list-group'>Stock</h4><br>",
            "<h4 class='list-group'>Total order</h4><br>",
            "<h4 class='list-group'>Team</h4><br>",
            "<h4 class='list-group'>Messages</h4><br>",
            "<h4 class='list-group'>Favorites</h4><br>",
            "<h4 class='list-group'>Settings</h4>",
            "</ul>"
        )
        ];
        function EnlistarArray(){
            $ListaTexto = $this -> array["Texto"];
            for ($i = 0; $i<=10; $i++){
                echo "$ListaTexto[$i]";
            }
        }
}
?>