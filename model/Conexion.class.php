<?php
    class Conexion 
    {    
        private $server, $user, $password, $dataBase;
        
        public function __construct (){
            $this->server = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->dataBase = "crud_php_mysql";

            $this->conexion = new mysqli($this->server,$this->user,$this->password,$this->dataBase);
        }

        //Ejecutar consulta
        public function runQuery($sql){
            $contenedor = $this->conexion->query($sql);
            return $contenedor->feth_all();
        }

        //Ejecutar actualización
        public function runUpdate ($sql){
            $this->conexion->query($sql);
        }

        public function cerrarConexion (){
            $this->conexion->close();
        }
    }
?>