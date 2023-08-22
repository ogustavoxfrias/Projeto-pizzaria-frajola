<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>
            Frajola Pizza`s
        </title>
        
        <meta charset="utf-8">      
        <!-- CSS PRINCIPAL -->
        <link rel="stylesheet" type="text/css" href="../index/CSS/style.css">
        <!--ICONE-->
        <link rel="icon" type="imagem/PNG" href="../index/imagens/icons8-pizza-96.png" >
        
        <!-- Importaçao JS -->
        <script src="js/jquery-1.9.1.min.js"> </script>
        <script src="js/jssor.slider.min.js"> </script>
        <script src="js/slider.js"> </script>
        
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
                                         Contato
                                     </a>
                           
                                <div class="div_hover_menu">
                                    <a href="../contatos/Contatos.php">
                                     Contato
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
        
        
        <div id="conteudo" class="center">
            
             <!-- SLIDE-->
        
            <header id="slider">
                <div style="position:relative;left:0;width:100%;overflow:hidden;" class="center">
                    <!--#Regiao Jssor Slider -->
                    <div id="slider1_container">
                        <!-- Carregamento -->
                        <div data-u="loading" class="jssorl-009-spin" >
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" alt=""/>
                        </div>
            
                        <!-- Slides Container -->
                        <div data-u="slides" style="cursor: pointer; position: absolute; left: 0px; top: 0px; width: 1400px;  height: 600px; overflow: hidden;">
                           
                             <div>
                                <img data-u="image" src="imagens/pizza_slide_modificada.png" alt="pizza_2"/>
                            </div>
                            
                            <div>
                                
                                <img data-u="image" src="imagens/pizzaLogo2.jpeg" alt="pizza_1" height="600">
                            </div>
                           
                            <div>
                                <img data-u="image" src="imagens/pizza_hd_modificada.jpeg" alt="pizza_3" />
                            </div>
                            <div>
                                <img data-u="image" src="imagens/pizza_slide4.jpeg" alt="pizza_4"/>
                            </div>
                               <div>
                                <img data-u="image" src="imagens/pizza_slide5.jpeg" alt="pizza_5"/>
                            </div>
                            <div>
                                <img data-u="image" src="imagens/pizza_doce_modificada.jpeg" alt="pizza_6"/>
                            </div>
                            <div>
                                <img data-u="image" src="imagens/pizza_doce2.jpeg" alt="pizza_7"/>
                            </div>
                            
                        </div>
                        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:-10;left:0;width:100%;height:100%;">
                                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                </svg>
                            </div>
                        </div>
                        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:-10;left:0;width:100%;height:100%;">
                                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:-10;left:0;width:100%;height:100%;">
                                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                            </svg>
                        </div>
            
                    </div>
                </div>
            </header>
            
            <!-- PRODUTOS-->
            
            <div id="caixa_principal">
            <nav id="caixa_menu_secundario">
                <div class="itens_menu_secundario">
                    Pizza 1
                </div>
                 <div class="itens_menu_secundario">
                    Pizza 2
                </div>
                 <div class="itens_menu_secundario">
                    Pizza 3
                </div>
                 <div class="itens_menu_secundario">
                    Pizza 4
                </div>
                 <div class="itens_menu_secundario">
                    Pizza 5
                </div>
                 <div class="itens_menu_secundario">
                    Pizza 6
                </div>
          
            </nav>
            
            <section id="caixa_principal_produto">
                <div id="redes_sociais">
                    <div id="itens_sociais1">
                    </div>
                    <div id="itens_sociais2">
                    </div>
                    <div id="itens_sociais3">
                    </div>
                </div>
                
                <div id="titulo_produtos">
                 <h1>Produtos</h1>
                </div>            
                <div class="itens1">
                    <div class="itens_imagem">
                    </div>
                    
                    <div class="itens_Nome">
                        Nome:
                    </div>
                    
                    <div class="itens_descricao">
                        Descrição:  
                    </div>
                    
                    <div class="itens_Preco">
                        Preço:
                    </div>
                    
                    <div class="itens_detalhes">
                        detalhes
                    </div>
                    
                </div>

                <div class="itens1">
                      <div class="itens_imagem">
                    </div>
                    
                    <div class="itens_Nome">
                        Nome:
                    </div>
                    
                    <div class="itens_descricao">
                        Descrição:  
                    </div>
                    
                    <div class="itens_Preco">
                        Preço:
                    </div>
                    
                    <div class="itens_detalhes">
                        detalhes
                    </div>
                </div>

                <div class="itens1">
                      <div class="itens_imagem">
                    </div>
                    
                    <div class="itens_Nome">
                        Nome:
                    </div>
                    
                    <div class="itens_descricao">
                        Descrição:  
                    </div>
                    
                    <div class="itens_Preco">
                        Preço:
                    </div>
                    
                    <div class="itens_detalhes">
                        detalhes
                    </div>
                </div>

                <div class="itens1">
                      <div class="itens_imagem">
                    </div>
                    
                    <div class="itens_Nome">
                        Nome:
                    </div>
                    
                    <div class="itens_descricao">
                        Descrição:  
                    </div>
                    
                    <div class="itens_Preco">
                        Preço:
                    </div>
                    
                    <div class="itens_detalhes">
                        detalhes
                    </div>
                </div>

                <div class="itens1">
                      <div class="itens_imagem">
                    </div>
                    
                    <div class="itens_Nome">
                        Nome:
                    </div>
                    
                    <div class="itens_descricao">
                        Descrição:  
                    </div>
                    
                    <div class="itens_Preco">
                        Preço:
                    </div>
                    
                    <div class="itens_detalhes">
                        detalhes
                    </div>
                </div>

                <div class="itens1">
                      <div class="itens_imagem">
                    </div>
                    
                    <div class="itens_Nome">
                        Nome:
                    </div>
                    
                    <div class="itens_descricao">
                        Descrição:  
                    </div>
                    
                    <div class="itens_Preco">
                        Preço:
                    </div>
                    
                    <div class="itens_detalhes">
                        detalhes
                    </div>
                </div>
                
            </section>
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
        
        <script>
            jssor_slider1_init()
            jssor_slider1_init1()
            jssor_slider1_init2()
            jssor_slider1_init3()
            jssor_slider1_init4()
            jssor_slider1_init5()
            jssor_slider1_init6()
            jssor_slider1_init7()
        </script>
        
       
    </body>

</html>