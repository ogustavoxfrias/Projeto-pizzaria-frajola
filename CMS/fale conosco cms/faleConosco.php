<?php
    
/*Conexao, importando arquivo*/
    require_once('../../Projeto/contatos/bd/conexao.php');
/*Chama a funçao que ira fazer a conexao com o BD*/
        $conexao = conexaoMysql();
        $sql = "select * from tblfrajola";
        
if(isset($_POST['btnFiltrar'])){
    if(isset($_POST['sltFiltro'])){
        
        if($_POST['sltFiltro']  == "sugestao"){
            $sql = " select * from tblfrajola where sugsCritic = 'sugestao' ";
            
        } 
        elseif($_POST['sltFiltro']  == "critica"){
            
            $sql =  "select * from tblfrajola  where sugsCritic = 'critica' ";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <title>
                CMS - Frajola Pizzaria
            </title>
             <link rel="icon" type="imagem/PNG" href="../../icons8-pizza-96.png">
            <!-- CSS PRINCIPAL-->
            <link rel="stylesheet" type="text/css" href="../index_cms/CSS/Style.css">
            <!--CSS DA PAGINA-->
            <link rel="stylesheet" type="text/css" href="../fale conosco cms/CSS/Style.css">
            <script src="./js/jquery.js"></script>
            
            <script>
                $(document).ready(function(){
                    
                      $('.visualizar').click(function(){
                       $('#container').fadeIn(1000);
                });
                    
                    $('#fechar').click(function(){
                     $('#container').fadeOut(1000);
                    });
                
                });
                
                                            
                function Visualizar(idItem){
        
                $.ajax({
                    type: "POST",
                    url: "modal.php",
                    data: {modo:'visualizar',codigo:idItem},
                    success: function(dados){
                    $('#modal_dados').html(dados);
                    }
                    
                });
            }
                
            </script>
            
    </head>
    
    <body>
        
        <div id="container">
            <div id="modal">
               <div id="fechar">
                   Fechar 
                </div>
                
                <div id="modal_dados">
                </div>
                
            </div>
        </div>
        
        <div id="caixa_conteudo">
            <div id="cabecalho">
                <div id="titulo_cabecalho">
                    CMS - Frajola´s Pizzaria
                </div>
                <div id="imagem_cabecalho">
                      <a href="../index_cms/index_cms.php">
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
                <div id="conteudoFaleConosco">
                    <form method="post" name="Formulario" action="faleConosco.php">
                    <div id="caixa_filtro">
                        <div id="filtro">
                         Filtrar informações:
                        <select name="sltFiltro">
                            <option value="sugestao">
                                Sugestões
                            </option>
                            <option value="critica">
                                Críticas
                            </option>
                        </select>
                        </div>
                        <div id="filtro_botao">
                            <input type="submit" name="btnFiltrar" value="Filtrar" id="btnFiltrar">
                        </div>
                    </div>
                        </form>
                        <div id="caixa_informacoes">
                            <div id="cabecalho_informacoes">
                                <div id="titulo">
                                Tabela de Consultas
                                </div>
                                <div id="caixa_itens">
                                    <div class="itens_titulo">
                                        Nome
                                    </div>
                                    <div class="itens_titulo">
                                        Telefone
                                    </div>
                                    <div class="itens_titulo">
                                        Email
                                    </div>
                                    <div class="itens_titulo">
                                        Profissão
                                    </div>
                                    <div class="itens_titulo">
                                       Opções
                                    </div>
                                </div>
                                
                                <?php
                                  
                                    $select = mysqli_query($conexao, $sql);
                                                                
                                    while($rsContatos = mysqli_fetch_array($select)){
                                
                                ?>
                                
                                <div id="resultado_itens">
                                    <div class="itens">
                                        <?=$rsContatos['nome']?>
                                    </div>
                                    <div class="itens">
                                        <?=$rsContatos['telefone']?>
                                    </div>
                                    <div class="itens">
                                        <?=$rsContatos['email']?>
                                    </div>
                                    <div class="itens">
                                        <?=$rsContatos['profissao']?>
                                    </div>
                                    <div class="itens" id="not_border">
                                        <div class="img_opcoes">
                                            <a href="#" class="visualizar" onclick="Visualizar(<?=$rsContatos['codigo']?>);">
                                            <img src="icones/iconfinder_search_322497.png" width="60" height="50">
                                            </a>    
                                        </div>
                                         <div class="img_opcoes" >
                                             
                                             <a  onclick="return confirm('Tem certeza que deseja excluir esse registro?');" href="./Ferramentas/excluir.php?modo=excluir&codigo=<?=$rsContatos['codigo']?>">
                                             
                                              <img src="./icones/iconfinder_circle-close-delete-remove-glyph_763469.png" width="60" height="50">
                                             </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                                
                            </div>
                        </div>
                        
                    
                </div>
            </div>

            <footer>
                <div id="conteudo_footer">Desenvolvido por: Hunter15X</div>
            </footer>

        </div>
            
    </body>
    
</html>