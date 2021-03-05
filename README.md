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

Tem um tutorial no site HomeHost:

https://www.homehost.com.br/blog/tutoriais/php/enviar-email-php-com-phpmailer-smtp/#:~:text=php%22%3B%20%2F%2F%20Inicia%20a%20classe,%2D%3ESMTPAuth%20%3D%20true%3B%20%2F%2F

Qualquer informação ou ajuda pode entrar em contato rodrigo.vds96@gmail.com
