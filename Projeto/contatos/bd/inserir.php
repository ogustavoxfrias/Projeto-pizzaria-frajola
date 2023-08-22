<?php

/*Verifica se houve a açao do POST pelo Formulario (click do botao)*/

if(isset($_POST['btnsalvar'])){
    
    // Importa o arquivo de conexao
    require_once('conexao.php');
    //Chama a funçao que a faz a conexao com o banco de dados
    $conexao = conexaoMysql();
    
    /* Resgatando os dados inseridos pelo usuario*/
    
    $nome = $_POST['txtnome'];
    $telefone = $_POST['txttelefone'];
    $celular = $_POST['txtcelular'];
    $email = $_POST['txtemail'];
    $homePage = $_POST['txthome_place'];
    $linkFacebook = $_POST['txtfacebook'];
    $sugCrit = $_POST['sltsc'];
    $mensagem = $_POST['txtmsg'];
    $sexo = $_POST['rdosexo'];
    $profissao = $_POST['txtprofissao'];
}

$sql = "
            insert into     tblfrajola (nome, telefone, celular, email, homePage, facebook, sugsCritic, msg,  sexo, profissao)
            
                values (
                '".$nome."',
                '".$telefone."',
                '" .$celular."',
                '" .$email."',
                '".$homePage." ',
                '".$linkFacebook."',
                '".$sugCrit."',
                '".$mensagem."',
                '".$sexo."',
                '".$profissao."'
                )
";

// Executa um script no banco de dados, ele envia para o banco (se o script der certo  iremos //redirecionar para uma nova pagina de cadastro, senão mostraremos uma mensagem de erro)

if(mysqli_query($conexao, $sql)){

    // redireciona para uma determinada pagina
    header('location: ../contatos.php');
}
else{
    echo('Erro ao executar o script!');
}

?>