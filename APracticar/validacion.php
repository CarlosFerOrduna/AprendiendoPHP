
<?php   
   
    if(isset($_POST["enviando"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $age = $_POST["age"];
   /*     if($edad <=17){
            echo "Eres menor de edad.";
        }else if($edad >=18 && $edad <= 49){
            echo "Eres mayor.";
        }else{
            echo "Eres de la tercera edad.";
        }
    */    
    }

   // echo $edad < 18 ? "Eres menor de edad" : "Eres mayor de edad";
    
    switch (true){
        
        case $username == "Juan" && $password == 1234 && $age < 17:
            
            echo "Usuario autorizado: Hola $username";
            
            break;
        case $username == "Maria" && $password == 5555 && $age < 17:
            
            echo "Usuario autorizado: Hola $username";
            
            break;
        case $username == "Pedro" && $password == 5444 && $age < 17:
            
            echo "Usuario autorizado: Hola $username";
            break;
        default: 
            echo "Usuario no autorizado, lo lamento $username";
    }
    
    
?>


