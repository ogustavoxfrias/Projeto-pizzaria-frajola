<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>
            Frajola Pizza`s
        </title>
        
        <!-- CSS PRINCIPAL-->
        <link rel="stylesheet" type="text/css" href="../index/CSS/style.css">
        
        <!-- CSS da PAGINA -->
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
        
        <!-- CONTEUDO -->
        
        <div id="caixa_conteudo">
            <div id="titulo_pag">
                Promoções
            </div>
            
            <div id="imagem_pizza_salgada">
                <img src="imagem/pizza_pepperoni.jpeg" width="1200" height="600" alt="pizza_salgada">
            </div>
            
            <div class="caixa_itens">
                 <div id="salgadas_titulo">Pizzas Salgadas </div>
                
                <div class="itens_promo">
                        <div class="pizza_promo_imagem">
                            <img src="imagem/pizza_salgada_promo.jpeg" width="300" height="200" alt="pizza_salgada_promo">
                        </div>
                        <div class="pizza_promo_nome">
                            <p>Pizza Pepperoni</p>
                            <div class="preco_promo">
                                <div class="preco_antigo">
                                    De: R$41,50
                                </div>
                                <div class="preco_novo">
                                    Por: R$34,90
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="itens_promo">
                        <div class="pizza_promo_imagem">
                            <img src="imagem/imagem_frango.jpeg" width="300" height="200" alt="pizza_salgada_promo">
                        </div>
                        <div class="pizza_promo_nome">
                            <p>Pizza Frangolino</p>
                            <div class="preco_promo">
                                <div class="preco_antigo">
                                    De: R$41,50
                                </div>
                                <div class="preco_novo">
                                    Por: R$34,90
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="itens_promo">
                        <div class="pizza_promo_imagem">
                            <img src="../Produto_mes/imagem/pizza_produtos.jpeg" width="300" height="200" alt="pizza_salgada_promo">
                        </div>
                        <div class="pizza_promo_nome">
                            <p>Pizza Marguerita</p>
                            <div class="preco_promo">
                                <div class="preco_antigo">
                                    De: R$40,00
                                </div>
                                <div class="preco_novo">
                                    Por: R$32,00
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
            
             <div id="imagem_pizza_doce">
                <img src="imagem/pizza_doce.jpeg" width="1200" height="600" alt="pizza_salgada">
            </div>
            
            <div class="caixa_itens">
                 <div id="doces_titulo">Pizzas Doces </div>
                
                <div class="itens_promo">
                        <div class="pizza_promo_imagem">
                            <img src="imagem/pizza_mix.jpeg" width="300" height="200" alt="pizza_salgada_promo">
                        </div>
                        <div class="pizza_promo_nome">
                            <p>Pizza Mix</p>
                            <div class="preco_promo">
                                <div class="preco_antigo">
                                    De: R$41,50
                                </div>
                                <div class="preco_novo">
                                    Por: R$34,90
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="itens_promo">
                        <div class="pizza_promo_imagem">
                            <img src="imagem/doce_pizza.jpeg" width="300" height="200" alt="pizza_salgada_promo">
                        </div>
                        <div class="pizza_promo_nome">
                            <p>Pizza Moranguete</p>
                            <div class="preco_promo">
                                <div class="preco_antigo">
                                    De: R$41,50
                                </div>
                                <div class="preco_novo">
                                    Por: R$34,90
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="itens_promo">
                        <div class="pizza_promo_imagem">
                            <img src="../Produto_mes/imagem/pizza_doce.jpeg" width="300" height="200" alt="pizza_salgada_promo">
                        </div>
                        <div class="pizza_promo_nome">
                            <p>Pizza Brigadeiro</p>
                            <div class="preco_promo">
                                <div class="preco_antigo">
                                    De: R$40,00
                                </div>
                                <div class="preco_novo">
                                    Por: R$32,00
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
            
            <div id="promo_adic">
                    <div id="titulo_promo_adc">
                        Promoção Fim de Semana
                    </div>
                    
                    <div id="imagem_promo_adc">
                        <img src="imagem/pizza_promo.jpeg" width="800" height="450" alt="combo_pizza">
                    </div>
                    
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