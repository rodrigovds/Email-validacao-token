<?php

    function consultatoken($to){
 
        
    
        $servername = "localhost";
        $username = "id8700332_cadusu";
        $password = "GeJ57/^C%HYk3yq(";
        $dbname = "id8700332_cadastro_usuario";
        
        
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
       $sql_consulta = "SELECT * FROM cadastro_clientes WHERE email = '$to'";
       
       $exe_logar = mysqli_query($conn, $sql_consulta) or die (mysqli_error());
       
       $num_result = mysqli_num_rows($exe_logar);
       
   
      if ($num_result == 0){


          return 0;
      }
        else{
            
        return  1;
    }
        

$conn->close();
}
?>