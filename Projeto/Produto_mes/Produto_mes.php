<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>
            Frajola Pizza`s
        </title>
        
        <!-- CSS PRINCIPAL-->
        
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
        
        
        <div id="caixa_conteudo">
            <header id="titulo_pagina">
                Produtos do Mês
            </header>
            
            <div class="conteudo_prod_mes">
                <div class="imagem_produto_mes">
                    <img src="imagem/pizza_produtos.jpeg" width="600" height="400" alt="produto_do_mes">
                </div>
                
                <div class="caixa_texto">
                    <div class="titulo_produto">
                        Pizza Margherita
                    </div>
                    <div class="texto_produto">
                        <p> Neste mês fizemos a inauguração da nossa filial em Barueri, e por esse motivo escolhemos uma das nossas pizzas mais conhecidas e aclamadas.
                        </p>
                        
                        <div class="preco_produto">
                            <p class="preco">R$25</p>
                        </div>
                        
                        <div class="ingred_pizza">
                            <p>Ingredientes:
                            </p>
                            <p> - Mussarela
                            </p>
                            <p> - Rodelas de tomates
                            </p>
                            <p> - Temperos
                            </p>
                            <p> - Molho de Tomate
                            </p>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
            <div class="conteudo_prod_mes">
                
                
                <div class="caixa_texto">
                    <div class="titulo_produto">
                        Pizza Brigadeiro
                    </div>
                    <div class="texto_produto">
                        <p> Para acompanhar sua pizza, oferecemos está delicosa pizza doce sabor brigadeiro.
                        </p>
                        
                        <div class="preco_produto">
                            <p class="preco">R$34</p>
                        </div>
                        
                        <div class="ingred_pizza">
                            <p>Ingredientes:
                            </p>
                            <p> - Chocolate Nestlé
                            </p>
                            <p> - Granulado (chocolate)</p>
                            <p> - Granulado(chc. branco)</p>
                    
                        </div>
                        
                    </div>
                </div>
                
                <div class="imagem_produto_mes">
                    
                    <img src="imagem/pizza_doce.jpeg" width="600" height="400" alt="produto_do_mes">
                    
                </div>
                
            </div>
            
           <div id="alerta_ao_cliente">
               *As ofertas acima são por tempo limitado!
            </div>
            
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