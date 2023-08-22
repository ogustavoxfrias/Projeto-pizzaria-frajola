<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>
            Frajola Pizza`s
        </title>
        
        <!-- CSS PRINCIPAL -->
        <link rel="stylesheet" type="text/css" href="../index/CSS/style.css">
        
        <!-- CSS da PAGINA-->
        <link rel="stylesheet" type="text/css" href="CSS/Style.css">
        <!-- ICON -->
        <link rel="icon" type="imagem/PNG" href="../index/imagens/icons8-pizza-96.png" >
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <!-- CSS DA CAIXA CADASTRO-->
        <link rel="stylesheet" type="text/css" href="css/cadastro.css">
        <!-- JavaScript-->
        <script src="js/modulo.js"></script>
        
        
    </head>
    
    <body>
        
        <!-- MENU -->
        
   <nav id="caixa_menu_desktop">
            <nav id="center_menu">
                
                <div id="logo">
                   <!-- <img src="imagens/pizza2_icon.png" width="150px" height="90px">-->
                </div>
                
                <div id="menu">
                    <ul id="menu_lista">
                        <li class="itens_menu"> 
                             <a href="../index/index.php">
                                        Home
                                     </a>
                           
                                <div class="div_hover_menu">
                                    <a href="../index/index.php">
                                        Home
                                     </a>
                                </div>                           
                        </li>
                        <li class="itens_menu"> 
                             <a href="../index/index.php">
                                        Curiosidades
                                     </a>
                           
                                <div class="div_hover_menu">
                                    <a href="../curiosidades/Curiosidades.php">
                                        Curiosidades
                                     </a>
                                </div>                           
                        </li>
                       <li class="itens_menu"> 
                             <a href="../Promocao/Promocao.php">
                                        Promoções
                                     </a>
                           
                                <div class="div_hover_menu">
                                    <a href="../Promocao/Promocao.php">
                                        Promoções
                                     </a>
                                </div>
                           
                           <ul id="submenu">
                               <li id="submenu_item">
                                  <a href="../Produto_mes/Produto_mes.php">Prod. do mês</a> 
                               </li>
                           </ul>
                        </li>
                      
                         <li class="itens_menu"> 
                             <a href="../Sobre_a_empresa/Sobre.php">
                                         Empresa
                                     </a>
                           
                                <div class="div_hover_menu">
                                    <a href="../Sobre_a_empresa/Sobre.php">
                                     Empresa
                                     </a>
                                </div>                           
                        </li>
                        <li class="itens_menu"> 
                             <a href="../lojas/lojas.php">
                                         Lojas
                                     </a>
                           
                                <div class="div_hover_menu">
                                    <a href="../lojas/lojas.php">
                                     Lojas
                                     </a>
                                </div>                           
                        </li>
                       <li class="itens_menu"> 
                             <a href="../contatos/Contatos.php">
                                         Contatos
                                     </a>
                           
                                <div class="div_hover_menu">
                                    <a href="../contatos/Contatos.php">
                                     Contatos
                                     </a>
                                </div>                           
                        </li>
                    </ul>
                </div>
                
                <div id="conteudos_inputs">
                    <form name="formulario">
                                Usúario:
                                <input type="text" name="txtusuario" maxlength="100" id="usuario">
                        <br>
                        <br>
                                Senha:
                                <input type="text" name="txtsenha" maxlength="20" id="senha">
                        <!-- BOTAO -->
                            <input type="submit" name="btnlogin" value="Login" id="btnlogin">
                        
                    </form>
                </div>
                
            </nav>
        </nav>

        <!--CONTEUDO -->
        
        <div id="caixa_conteudo">
            
            <form name="formulario" method="post" action="bd/inserir.php">
            <!-- Área do cadastro -->
            <div id="caixa_cadastro" class="center">
                <div id="titulo_cadastro">
                    <h1>Cadastro</h1>
                </div>
                <div class="caixa_informacoes">
                    <div class="subtitulo_informacoes">
                        <h2>*Nome: </h2>                    
                    </div>
                    <div class="caixa_input">
                        <input placeholder="Digite seu nome..." type="text" name="txtnome" value="<?=@$nome?>" onkeypress="return validarEntrada(event,'numeric');" required maxlength="50"/>
                    </div>
                </div>
                <div class="caixa_informacoes">
                    <div class="subtitulo_informacoes">
                        <h2>Telefone: </h2>
                    </div>
                    <div class="caixa_input">
                        <input placeholder="011 0000-0000..." id="telefone" type="text" name="txttelefone" value="<?=@$telefone?>" onkeypress="return mascaraFone(this, event);" maxlength="15" >
                    </div>
                </div>
                <div class="caixa_informacoes">
                    <div class="subtitulo_informacoes">
                        <h2>*Celular: </h2>
                    </div>
                    <div class="caixa_input">
                        <input placeholder="Infome seu número de celular..." type="text" name="txtcelular" value="" onkeypress="return validarEntrada(event, 'string');" required maxlength="15">
                    </div>
                </div>
                <div class="caixa_informacoes">
                    <div class="subtitulo_informacoes">
                        <h2>*Email: </h2>
                    </div>
                    <div class="caixa_input">
                        <input placeholder="Digite seu Email..." type="email" name="txtemail" value="" required maxlength="45">
                    </div>
                </div>
                <div class="caixa_informacoes">
                    <div id="home_page" class="subtitulo_informacoes">
                        <h2>Home Page: </h2>
                    </div>
                    <div class="caixa_input">
                        <input  type="text" name="txthome_place" value="" 
                                placeholder="Digite sua pág pessoal" maxlength="45">
                    </div>
                </div>
                <div class="caixa_informacoes">
                    <div id="link_facebook" class="subtitulo_informacoes">
                        <h2>Facebook </h2>
                    </div>
                    <div class="caixa_input">
                        <input  type="text" name="txtfacebook" value="" placeholder="Digite seu Facebook" maxlength="45">
                    </div>
                </div>
                <div class="caixa_informacoes">
                    <div id="sugestao_critica" class="subtitulo_informacoes">
                        <h2>Sugestão/ </h2>
                        <h2>Crítica</h2>
                    </div>
                    <select name="sltsc">
                        <option value="sugestao">
                            Sugestão
                        </option>
                        <option value="critica">
                            Crítica
                        </option>
                    </select>
                </div>
                <div id="caixa_obs" class="caixa_informacoes">
                    <div id="obs" class="subtitulo_informacoes">
                        <h2>*Mensagem: </h2>
                    </div>
                    <textarea placeholder="Deixe uma observação..."  name="txtmsg" rows="100" cols="100" required></textarea>
                </div>
                <div class="caixa_informacoes">
                    <div class="subtitulo_informacoes" id="sexo">
                        <h2>*Sexo: </h2>
                    </div>
                    <div class="caixa_input" id="input_radio">
                        <input type="radio" name="rdosexo" value="F" required>Feminino
                        <input type="radio" name="rdosexo" value="M">Masculino
                    </div>
                </div>
                <div class="caixa_informacoes">
                    <div id="profissao" class="subtitulo_informacoes">
                        <h2>*Profissão </h2>
                    </div>
                    <div class="caixa_input">
                        <input  type="text" name="txtprofissao" value=""  placeholder="Digite sua profissão" required maxlength="45">
                    </div>
                </div>


                <div id="caixa_botao">
                    <input type="submit" name="btnsalvar" value="Salvar">
                </div>
            </div>


            </form>
        </div>
         

        <!-- RODAPE -->
        

        <footer id="rodape" class="center">
            
            <div  id="syst">
              <input type="submit" name="btnsistema" value="Sistema Interno" id="btnsistema">
            </div>
            
            <div id="endereco">
                Endereço: Av. Luis Carlos Berrini, nº 666. 
            </div>
            
            <div id="app">
                <div id="imagem_app">
                </div>
                
                <div id="caixa_link_app">
                    <input type="submit" name="btnapp" value="Baixe nosso App!" id="btnapp">
                </div>
                
            </div>
            
        </footer>
       
    </body>

</html>