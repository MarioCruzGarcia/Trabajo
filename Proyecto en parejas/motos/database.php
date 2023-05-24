<?php

class Database{

    public static function conectar(){
        $driver = 'mysql';
        $host = '127.0.0.1';
        $port = '3306';
        $user = 'root';
        $password = '';
        $db = 'concesionario';

        $dsn   = "$driver:dbname=$db;host=$host;port=$port";

        try {

                  $gbd = new PDO($dsn, $user, $password);
            
                } catch (PDOException $e) { 
            
                  echo 'Falló la conexión: ' . $e->getMessage();
            
                }
            
              return $gbd;
            
                }

                public static function getAll() {
                    $sql = "SELECT * from motos";
                    $resultado = self::conectar()->query($sql);
            
                    return $resultado;
                }

    
        /**
         * Funcion que realiza el login de usuario
         * Llamada a la base de datos para comprobar si existe o no el usuario
         */
        public static function login($email, $password){
            // 1. Conectar a la BD

            // 2. Realizar consulta con el email y password recibido
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            
            // 3. Si es correcto, devuelvo los datos del usuario
            $user = self::conectar()->query($sql);

            if($user != null){
                return $user->fetch(PDO::FETCH_ASSOC);
            }
            else{
                // 4. Si no es correcto, devuelvo null
                return null;
            }
        }

    //Funcion que elimina segun el id seleccionado
    public static function delete($id){
        $sql = "DELETE FROM motos WHERE id = $id";
        self::conectar()->exec($sql);
    }

    //Funcion que inserta un ordenador en la basedeDatos
    public static function save($datos){
        $sql = "INSERT INTO motos (marca, modelo, etiqueta, potencia, combustible, consumo, precio) VALUES ('$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]', '$datos[7]')";
        self::conectar()->exec($sql);
    }

    //Funcion que recibe un id por parametro y busca su ordenador asociado
    public static function findById($id) {
        $sql = "SELECT * FROM motos WHERE id = $id";
        $datos = self::conectar()->query($sql);
        return $datos->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($datos) {
        $sql = "UPDATE motos SET marca = '$datos[1]', modelo = '$datos[2]', etiqueta = '$datos[3]', potencia = '$datos[4]', combustible = '$datos[5]', consumo = '$datos[6]', precio = $datos[7] WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }
}

?>




























