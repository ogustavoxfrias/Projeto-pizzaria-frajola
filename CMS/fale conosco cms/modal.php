<?php
/*Conexao, importando arquivo*/
    require_once('../../Projeto/contatos/bd/conexao.php');
/*Chama a funçao que ira fazer a conexao com o BD*/
        $conexao = conexaoMysql();
// Verifica se existe a variavel modo
    if(isset($_POST['modo'])){
        // Valida se o conteudop da variavel modo é visualizar
        if(strtoupper($_POST['modo']) == 'VISUALIZAR'){
            // Recebe o id de registro enviado pelo AJAX
            $codigo = $_POST['codigo'];
         
            // Script para buscar no banco de dados
            $sql = "select * from tblfrajola
                                where codigo=".$codigo;
            
            //Executa o script no banco de dados
            $select = mysqli_query($conexao,$sql);
            
            //Verifica se existem dados e converte em um array
            if($rsVisualizar = mysqli_fetch_array($select)){
                
                $nome = $rsVisualizar['nome'];
                $telefone = $rsVisualizar['telefone'];
                $celular = $rsVisualizar['celular'];
                $email = $rsVisualizar['email'];
                $sexo = $rsVisualizar['sexo'];
                $obs = $rsVisualizar['msg'];
                $profissao = $rsVisualizar['profissao'];
            }
            
        }
    }
?>

<html>
    <head>
    </head>
    
    <body>
        <table border="1">
            <tr>
                <td>
                    Nome:
                </td>
                <td>
                    <?=$nome?>
                </td>
            </tr>
            
            <tr>
                <td>
                    Telefone:
                </td>
                <td>
                    <?=$telefone?>
                </td>
            </tr>
            <tr>
                <td>
                    Celular:
                </td>
                <td>
                    <?=$celular?>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <?=$email?>
                </td>
            </tr>
            <tr>
                <td>
                    Sexo:
                </td>
                <td>
                    
                    <?=$sexo?>
                </td>
            </tr>
            <tr>
                <td>
                 Profissão
                </td>
                <td>
                    <?=$profissao?>
                </td>
            </tr>
            <tr>
                <td>
                    Obs:
                </td>
                <td>
                    <?=$obs?>
                </td>
            </tr>
            
        </table>
    </body>
    
</html>