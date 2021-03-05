# Email-validacao-token

1. Projeto para confirmação de e-mail e continuação de cadastro
2. Ao digitar nome e E-mail o formulário manda requisição para página "processamail.php
3. Processamail por sua vez faz a confirmação se o e-mail já consta na base de dados, se sim não deixa continuar o cadastro. 
4. O processamail utiliza o PHPMAILER para fazer o envio. (Pasta disponibilizada no GIT), o email não estando cadastrado é dado continuidade, gerando um novo TOKEN, inserindo no banco de dados com ('inserir.php';) e enviado estas informações para o e-mail com um link de confirmação. Via GET coletamos as informações e conferimos se o token coletado é o mesmo que está cadastrado, é necessário ser o e-mail e o token = para dar continuidade no cadastro, se não for pede para iniciar um novo cadastro.
5. Na tela finalcadastro.php é preenchido o nome, email em readonly para fazer um update na tabela e alterar a tabela adicionando os ultimos dados, para assim finalizar o cadastro. 

Restante está em desenvolvmento, porém a alteração de senha ou recuperar a senha será feita de forma parecida com o início do cadstro. 

Download do PHPMailer:
https://www.homehost.com.br/blog/wp-content/uploads/2016/06/PHPMailer-master.zip

Nos arquivos disponibilizados já consta as chamadas para o PHPMAILER, nele precisará cadastrar o e-mail e senha, e configurar o email de envio. 

<?php   

// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "PHPMailer-master/PHPMailerAutoload.php"; 

// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 

// Método de envio 
$mail->IsSMTP(); 

// Enviar por SMTP 
$mail->Host = "mail.meusitemodelo.com"; 

// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 25; 


// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 

// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'francisco@meusitemodelo.com'; 
$mail->Password = 'senha-do-email'; 

// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 

// Define o remetente 
// Seu e-mail 
$mail->From = "francisco@meusitemodelo.com"; 

// Seu nome 
$mail->FromName = "Francisco"; 

// Define o(s) destinatário(s) 
$mail->AddAddress('maria@gmail.com', 'Maria'); 

// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 

// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 

// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 

// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 

// Assunto da mensagem 
$mail->Subject = "Assunto da mensagem"; 

// Corpo do email 
$mail->Body = 'Aqui entra o conteudo texto do email'; 

// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

// Envia o e-mail 
$enviado = $mail->Send(); 

// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 


?>
Fonte: HomeHost.com.br

Qualquer informação ou ajuda pode entrar em contato rodrigo.vds96@gmail.com
