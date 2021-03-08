<?php
// Recebe dados, abre a conexão com banco de dados e checa.

    $email    = $_POST['emailc'];
    $senha    = $_POST['senha'];


    require 'conexao.php';
    
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    }

$sql_consulta = "SELECT * FROM cadastro_clientes WHERE email='$email' AND senha_acesso='$senha'";

$exe_logar = mysqli_query($conn, $sql_consulta) or die (mysqli_error());

$num_result = mysqli_num_rows($exe_logar);



    if ($num_result == 0){
    
        echo  "<script>alert('Ops, você não possui cadastro, tente novamente!');</script>";
        echo  "<script> window.location = '../index.php'</script>";
    }
        else
        
        {   
            while($dados = mysqli_fetch_array($exe_logar))
            {
                $id = $dados['id'];
                session_start();
                $_SESSION['logado'] = $id;
                
                echo  "<script> window.location = '../cadastro_financeiro.php'</script>";
        
            }
        
        }


$conn->close();
?>