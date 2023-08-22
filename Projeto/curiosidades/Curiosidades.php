<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>
            Frajola Pizza`s
        </title>
        
        <!-- CSS PRINCIPAL-->
        <link rel="stylesheet" type="text/css" href="../index/CSS/style.css">
        <!--CSS da PAGINA-->
        <link rel="stylesheet" type="text/css" href="CSS/Style.css">
        
        <link rel="icon" type="imagem/PNG" href="../index/imagens/icons8-pizza-96.png">
        
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
        
        <!-- Conteudo -->
        
        <div id="caixa_conteudo">
            <div id="titulo">
                Curiosidades
            </div>
            
            <header id="imagem_curiosidades">
            </header>
            
            <div class="texto_curiosidades">
                Apesar de ter sido inventada na Itália, a Pizza é um dos alimentos mais consumidos e é responsável por uma parcela significativa das vendas de alimentos no mundo inteiro. Até mesmo em países pequenos e menos desenvolvidos encontramos pizzarias lotadas.

                Como é que este alimento se tornou tão popular no mundo inteiro? É simples! Estamos falando de um alimento simples com uma infintas possibilidades de de personalização. Ao longo dos séculos, os donos de pizzarias levaram o conceito original italiano de pizza para o próximo nível, mas muita coisa aconteceu e acontece até hoje na história deste alimento tão popular.
            </div>
            
            <div class="imagem_conteudo_curiosidades">
                <img src="imagem/pizza_italia.png" width="550" height="300" alt="pizza_curiosidades1">
            </div>
            
            <div class="imagem_conteudo_curiosidades">
                <img src="imagem/pizza_day_of_pizza.jpeg" width="550" height="300" alt="pizza_curiosidades2">
            </div>
            
            <div class="texto_curiosidades">
             O Dia da Pizza é comemorado desde 1985. A data foi instituída pelo então secretário de turismo, Caio Luís de Carvalho, por ocasião de um concurso estadual que elegeria as 10 melhores receitas de mussarela e margherita. Empolgado com o sucesso do evento, ele escolheu a data de seu encerramento, 10 de julho, como data oficial de comemoração.
                
                A Primeira pizzaria do Brasil foi a extinta cantina Santa Genoveva, aberta em 1910, no bairro do Brás, em São Paulo – SP.
O estabelecimento comercial pertencia ao italiano de Nápoles, Carmino Corvino, conhecido na época como Dom Carmenielo. A pizzaria oferecia no início apenas três sabores: mussarela, aliche e napolitana.

Carmino desembarcou no país em 1897 e como outros italianos, começou a trabalhar na capital paulista vendendo pizza pelas ruas da cidade, cortada em pedaços.
                
            </div>
            
                <div id="texto_curiosidades2">
        Foi a Segunda Guerra Mundial que ajudou para que a pizza fosse espalhada pelo mundo. Até então, a pizza era apreciada principalmente pelos imigrantes italianos em suas comunidades locais. Durante a ocupação da Itália, as tropas aliadas começaram a comer alimentos locais para complementar as rações que às vezes acabavam. Os padeiros locais mal conseguiam acompanhar a demanda dos soldados por pizza. E é claro que, ao voltarem para casa, levaram também esta paixão.
            </div>
            
            <div class="imagem_conteudo_curiosidades">
                <img src="imagem/pizza_war.jpeg" width="550" height="300" alt="pizza_curiosidades3">
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