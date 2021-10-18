<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>


Nombre: <input type="text" name="nombre">
<br>
Direccion: <input type="text" name="direccion">
<br>
<input type="submit" value="Enviar">

    <?php
        class Agenda {

            public $arrayPersonas=array();
            public $arrayDireccion=array();

           public function __construct () {
                $this-> arrayPersonas[]="Nombres: ";

            }


            function validacion(){

                //no introducimos nada

                if ($_POST["nombre"]=="" && $_POST["direccion"]==""){

                    echo "No has introducido nada";
                }

                else{
                    for ($i=0; $i<count($this->arrayPersonas); $i++){

                        $arrayPersonas[]= $_POST["nombre"];
                    }


                    for ($i=0; $i<count($this->arrayDireccion); $i++){

                        $arrayDireccion[]= $_POST["direccion"];
                    }
                }
            }




            function caso1(){


            }






            function comprobarEmail($email){
                if(strlen(strstr($email,'@'))>0){
                    return true;
                }
                else{
                    return false;
                }
            }


           
        }
            
       $agenda = new Agenda();
       $agenda -> validacion();        
             
            
    ?>


</body>