<?php
require_once('../../Projeto/contatos/bd/conexao.php');   
$conexao = conexaoMysql();
$sql = "select * from tblusuarios";


    if(isset($_POST['btnCadastrar'])){
        
        $nome = $_POST['txtNome'];
        $usuario = $_POST['txtUser'];
        $senha = $_POST['txtSenha'];
        $codNivel = $_POST['sltnivel'];
        
         $sql = "insert into tblusuarios(nome, usuario, senha, codNivel)
            values('".$nome."',
            '".$usuario."',
            '".$senha."',
           '".$codNivel."' )";
    }

if($select = mysqli_query($conexao,$sql)){
}
else{
     echo("Erro ao executar o script");
}



?>

<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <title>
                CMS - Frajola Pizzaria
            </title>
             <link rel="icon" type="imagem/PNG" href="../../icons8-pizza-96.png">
            <link rel="stylesheet" type="text/css" href="CSS/Style.css">
            <link rel="stylesheet" type="text/css" href="../index_cms/CSS/Style.css">
    </head>
    
    <body>
        <div id="caixa_conteudo">
            <div id="cabecalho">
                <div id="titulo_cabecalho">
                    CMS - Frajola´s Pizzaria
                </div>
                <div id="imagem_cabecalho">
                        <a href="index_cms.php">
                    <img src="../imagens/iconfinder_settings_981084.png" height="220">
                        </a>
                </div>
            </div>
            <div id="caixa_menu">
                <div id="itens">
                <div class="item_menu">
                    <div class="imagem_menu_item">
                        <img src="../imagens/icons8-service-64.png" width="140" height="110" alt="admCont">
                    </div>
                    <div class="texto_menu_item">
                            <a href="../conteudo_cms/conteudo_cms.php">Adm. Conteúdo</a>
                    </div>
                </div>

                <div class="item_menu">
                        <div class="imagem_menu_item">
                            <img src="../imagens/iconfinder_envelope_1608678.png" width="110" height="100" alt="admCont">
                        </div>
                        <div class="texto_menu_item">
                                <a href="../fale%20conosco%20cms/faleConosco.php">Adm. Fale Conosco</a>
                        </div>
                    </div>

                <div class="item_menu">
                    <div class="imagem_menu_item">
                        <img src="../imagens/iconfinder_87_171445.png" width="120" height="110" alt="admCont">
                    </div>
                    <div class="texto_menu_item">
                        Adm. Usuários
                    </div>
                </div>
                </div>

                <div id="caixa_bl">

                <div id="caixa_bem_vindo">
                    Bem Vindo, XXXX
                </div>

                <div id="caixa_logout">
                    <div id="imagem_logout">
                    </div>
                    <div id="texto_logout">
                        Logout
                    </div>
                    </div>
                
                </div>

            </div>

            <div id="area_conteudo">

                <div id="caixa_geral">
                    <div id="title">
                        Administração de Usúarios
                    </div>
                    
                    <form name="formulario" method="post" action="usuario.php">
                    <div id="caixa_cadastro">
                        <div id="title_cadastro">
                            Cadastro de usários
                        </div>
                            
                                <div class="caixa_inputs">
                                    <div class="itens_inputs">
                                        Nome:
                                    </div>
                                    <div class="inputs">
                                        <input type="text" name="txtNome" value="" class="input_txt" placeholder="Digite seu nome...">
                                    </div>
                                </div>
                        
                                <div class="caixa_inputs">
                                    <div class="itens_inputs">
                                        Usúario:
                                    </div>
                                    <div class="inputs">
                                        <input type="text" name="txtUser" value="" class="input_txt"
                                               placeholder="Digite seu email...">
                                    </div>
                                </div>
                        
                                <div class="caixa_inputs">
                                    <div class="itens_inputs">
                                        Senha:
                                    </div>
                                    <div class="inputs">
                                        <input type="text" name="txtSenha" value="" class="input_txt"
                                               placeholder="Digite sua senha...">
                                    </div>
                                </div>
                        
                        <div class="caixa_inputs">
                                    <div class="itens_inputs">
                                        Nível:
                                    </div>
                                    <div class="inputs">
                                            <select name="sltnivel">
                                            <option value="">
                                                Selecione um nivel
                                            </option>    
                                            
                                            <?php
                                                $sql = "select * from tblniveis";
                                                $select = mysqli_query($conexao, $sql);
                                                while($rsNivel = mysqli_fetch_array($select)){
                                                    
                                            ?>
                                                
                                                <option value="<?=$rsNivel['codigo']?>">
                                                <?=$rsNivel['nome']?>
                                            </option>
                                                
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                        
                        <div id="caixa_button">
                            <input type="submit" name="btnCadastrar" value="Cadastrar" id="btnCadastrar">
                        </div>
                                
                </div>
                        
            <div id="box_view_user">
                <div id="title_usuarios">
                     Usúarios Cadastrados
                </div>
                <div id="consulta_itens">
                        <div class="itens_consulta">
                            Nome
                        </div>
                          <div class="itens_consulta">
                              Usuário
                        </div>
                          <div class="itens_consulta">
                              Nível
                        </div>
                        <div class="itens_consulta">
                              Opções
                        </div>
                </div>
                
                <?php
                    $sql = "select * from tblusuarios";
                    $select = mysqli_query($conexao, $sql);
                    while($rsConsulta = mysqli_fetch_array($select)){
                        
                ?>
                
                <div id="consulta_bd">
                        <div class="itensBd">
                            <?=$rsConsulta['nome']?>
                        </div>
                        <div class="itensBd">
                             <?=$rsConsulta['usuario']?>    
                        </div>
                        <div class="itensBd">
                        </div>
                        <div class="itensBdOps">
                            <div class="item_crud">
                                <a onclick="return confirm('Tem certeza que deseja excluir esse registro?');" href="./Ferramentas/excluir.php?modo=excluir&codigo=<?=$rsContatos['codigo']?>">
                                    <img src="imagens/delete.png" width="45" height="40">
                                </a>
                            </div>
                            <div class="item_crud">
                                <a>
                                    <img src="imagens/edit.png" width="45" height="40">
                                </a>
                            </div>
                            <div class="item_crud">
                                <a>
                                    <img src="imagens/zoom.png" width="45">
                                </a>
                            </div>
                        </div>
                            
                </div>
                
                <?php
                    }
                ?>
                
            </div>
            
            </form>

            <footer>
                <div id="conteudo_footer">Desenvolvido por: Hunter15X</div>
            </footer>

        </div>
        </div>
        </div>
        
    </body>
</html>