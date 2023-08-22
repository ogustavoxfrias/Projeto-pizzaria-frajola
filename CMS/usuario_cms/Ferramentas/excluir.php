<?php
if(isset($_GET['modo'])){
   
    if ($_GET['modo']=='excluir'){
        

        require_once('../../../Projeto/contatos/bd/conexao.php');

        $conexao = conexaoMysql();
        
        $codigo = $_GET['codigo'];
        $sql = "delete from tblusuarios
                where codigo =".$codigo;
        
        if(mysqli_query($conexao, $sql)){
            header('location: ../usuario_cms.php');
            
        }else{
            echo("Erro ao mandar o script para o banco");
        }
    }
}


?>