
		<?php
		
		    $to   = $_POST['emailcadastro'];
	        $nome = $_POST['nome'];
            $valor_chave = md5(date('Y-m-d H:i'));
            
            
            
		   include 'validaemail.php';
	        
	       $return = consultatoken($to);
		    
		    if( $return == 1)
		    {
		        	echo  "<script>alert('Email já foi cadastrado, verifique o e-mail enviado!');</script>";
		        	  echo  "<script> window.location = '../index.php'</script>";
		        	exit();
		        
		    }
		    
		    
            
         
			//Inicio Enviar e-mail
			require '../PHPMailer/PHPMailerAutoload.php';
	
			$Mailer = new PHPMailer();
			
			//Define que será usado SMTP
			$Mailer->IsSMTP();
			
			//Enviar e-mail em HTML
			$Mailer->isHTML(true);
			
			//Aceitar carasteres especiais
			$Mailer->Charset = 'utf-8';
			
			//Configurações
			$Mailer->SMTPAuth = true;
			$Mailer->SMTPSecure = 'tls';
		   // $mailer->SMTPOptions = array ('tls' => array('verify_peer' => false,'verify_peer_name' => false,'allw_self_signed'=>true));
			
			//nome do servidor/
			$Mailer->Host = "smtp.ingaia.com.br";
			//Porta de saida de e-mail 
			$Mailer->Port = 587;
			
			//Dados do e-mail de saida - autenticação
			$Mailer->Username = 'rodrigo@mauroimoveis.imb.br';
			$Mailer->Password = 'Rodmon@135*';
			
		//	$Mailer->SMTPDebug = 3;
		//	$Mailer->Debugoutput = 'html';
			
			//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
			$Mailer->From = 'rodrigo@mauroimoveis.imb.br';
			
		    //Nome do Remetente
			$Mailer->FromName = 'Financeiro Corretor';
			
			//Assunto da mensagem
			$Mailer->Subject = 'Valide seu email para continuar o cadastro - Corretor Financeiro';
			
			//Corpo da Mensagem
			$mensagem  = "Olá ".$nome ."!<br><br>";
			$mensagem .= "Clique em <b>continuar cadastro</b> para validar o e-mail e concluir o cadastro! <br> <br>";
			$mensagem .= "Agora, confirmando o e-mail, insira os dados adicionais, e <a href='https://rodmoninfo.000webhostapp.com/finalcadastro.php?token=$valor_chave&nome=$nome&email=$to'>clique aqui</a> para continuar.<br><br>";
		    $mensagem .= "Se você recebeu este e-mail por engano, simplesmente o exclua.<br> <br><br>";
			$mensagem .= "Financeiro Corretor";
			
			$Mailer->Body = $mensagem;
			
			//Corpo da mensagem em texto
			$Mailer->AltBody = 'conteudo do E-mail em texto';
			
			//Destinatario 
			$Mailer->AddAddress($to);
			
			if($Mailer->Send()){
			    
				echo  "<script>alert('Verifique seu e-mail para concluir o cadastro!');</script>";
                
				require 'inserir.php';
				inserir($to, $nome, $valor_chave);
				 echo  "<script> window.location = 'index.php'</script>";
				
				
			}else
			
			{
			        echo "Ops $nome, o token não foi enviado para o e-mail: $to  !" . "<br><br>" . $Mailer->ErrorInfo;
			}
	
        
			
		?>
