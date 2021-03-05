<?php
// Recebe dados, abre a conexão com banco de dados e checa.



    function inserir($to, $nome, $valor_chave){
 
        $servername = "localhost";
        $username = "id8700332_cadusu";
        $password = "GeJ57/^C%HYk3yq(";
        $dbname = "id8700332_cadastro_usuario";
        
        
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO cadastro_clientes (nome,email,token,cpf,telefone) VALUES ('$nome', '$to', '$valor_chave',0,'')";
    
    if ($conn->query($sql) === TRUE) {
        
     echo  "<script> window.location = '../cadastro.php'</script>";
      
    } else {
        
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
        
    

$conn->close();

}
?>