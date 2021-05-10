<?php
  
  

    

    // $con = (int) 0;
    // do{
    //     if($con==3) {goto salir;} 
    //     echo "Hola $con <br>";
    //     $con++;
    //     continue;
    // }while(true); 
    // salir:

//     do{
//         echo "Hola estoy en el do while <br>";
//         echo <<<Repetir
//         <script>
//             alert('Cambiar el dato en url');
//         </script>
// Repetir;
//     }while($_GET['Nombre']!="Miguel");



    // while($bandera){

    //     echo "Hola estoy en el while ";
        
    //     break;
    // }



    // while($_POST['Nombre']!="Miguel"){
    //     echo '<script>window.history.back();</script>';
    //     break;
    // }
    // echo "El nombre era correcto";


//     while($_GET['Nombre']!="Miguel"){
//         echo <<<Datos
//         <script>
//             let nom = prompt('Ingrese el nombre');
//             location.assign('?Nombre='+nom+'');
//         </script> 
// Datos;
//     }




    $num = (int) $_REQUEST['numero'];
    $bandera = (bool) true;
    while($num>0 && $num <= 5){
        echo "El numero enviado al archivo php es el correcto $num <br>";
        $num--;
        $bandera = false;
    }

    if($bandera) echo '<script>window.history.back();</script>';






    // $numero = (int) random_int(0, 10);
    // while($numero){
    //     echo "$numero <br>";
    //     $numero = (int) random_int(0, 10);
    // }



    // $papitas = (int) 5;
    // while($papitas){
    //     echo "La cantidad de papitas son $papitas <br>";
    //     $papitas--;

    // }
    // echo (!$papitas) ? "Ya no hay mas papitas para comer $papitas" : null;
    

?>