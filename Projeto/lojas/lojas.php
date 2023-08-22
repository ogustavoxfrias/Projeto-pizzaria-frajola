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
        
        <link rel="icon" type="imagem/PNG" href="../index/imagens/icons8-pizza-96.png" >
        
        
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
        
        <!-- CONTEUDO-->
        
        <div id="caixa_conteudo">
            <header id="titulo_pagina">
                Nossas Lojas
            </header>
            
            <section id="caixa_lojas">
                <!-- Loja 1 -->
                <div class="caixa_conteudo_das_lojas">
                    <div class="caixa_imagem_das_lojas">
                        <img src="imagem/pizzaria_loja1.jpeg" width="300" height="200" alt="pizzaria">
                        
                    </div>
                    <div class="caixa_endereco">
                        <div class="caixa_titulo_nome">
                            Frajola´s Pizzaria (sede)
                        </div>
                        <div class="texto_end">
                            <p> Endereço: Av. Luis Carlos Berrini, nº 666. - São Paulo, SP </p>
                            <br>
                            <p>Telefone: (11) 4465-9075</p>
                        </div>
                        <div class="caixa_texto_hours">
                            <p>Horário de atendimento:</p>
                            <p>Seg - Qui - 17:00 às 00:00</p>
                            <p>Sex - Dom - 16:00 às 1:00</p>
                        </div>
                    </div>
                </div>
                
                <!-- Loja 2 -->
                
                <div class="caixa_conteudo_das_lojas">
                    <div class="caixa_imagem_das_lojas">
                        
                        <img src="imagem/pizzaria_loja2.jpeg" width="300" height="200" alt="pizzaria2">
                        
                    </div>
                    <div class="caixa_endereco">
                        <div class="caixa_titulo_nome">
                            Frajola´s Pizzaria II
                        </div>
                        <div class="texto_end">
                            <p> Endereço: Avenida Municipal, n°318 - Barueri, SP</p>
                            <br>
                            <p>Telefone: (11) 7092-2830</p>
                        </div>
                        <div class="caixa_texto_hours">
                            <p>Horário de atendimento:</p>
                            <p>Seg - Qui - 17:00 às 00:00</p>
                            <p>Sex - Dom - 16:00 às 1:00</p>
                        </div>
                    </div>
                </div>
                
                <!-- Loja 3 -->
                
                <div class="caixa_conteudo_das_lojas">
                    <div class="caixa_imagem_das_lojas">
                        
                        <img src="imagem/pizzaria_loja3.jpeg" width="300" height="200" alt="pizzaria3">
                        
                    </div>
                    <div class="caixa_endereco">
                        <div class="caixa_titulo_nome">
                            Frajola´s Pizzaria III
                        </div>
                        <div class="texto_end">
                            <p> Endereço: R. Lucinda Pires Tempos, n°85 - Jandira - SP </p>
                            <br>
                            <p>Telefone: (11) 06624-440</p>
                        </div>
                        <div class="caixa_texto_hours">
                            <p>Horário de atendimento:</p>
                            <p>Seg - Qui - 17:00 às 00:00</p>
                            <p>Sex - Dom - 16:00 às 1:00</p>
                        </div>
                    </div>
                </div>
                
            </section>
            
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