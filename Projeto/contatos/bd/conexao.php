<?php

 /*       Conexao com o bancos de dados MYSQL

- Primeira forma de conexão--------obs(esta desatualizado nas versoes atuais do PHP)

        mysql_connect()-- função para realizar a conexao com o banco de dados
            Ex: mysql_connect(host, user, password)
    
        mysql_select_db()-- permite escolher qual database ira ser utilizado no projeto

-Segunda forma de conexão
        
        mysqli_connect()-- função para realizar a conexao com o  banco de dados (biblioteca mais atual para se utilizar)
        Ex: mysqli_connect(host, user, password, database)
        
-Terceira forma de conexão
        
        PDO()-- classe para realizar a conexão com o banco de dados(100% orientado a objeto)
        Ex:  $conexao = new PDO('msql:host=localhost;dbname=meuBancoDeDados', user, password);                            site conectionStrings
        
*/


function conexaoMysql() {

$host = (string) "localhost"; // local do BD
$user = (string) "root"; // usuário de autentificaçao
$password = (string) "bcd127";// senha
$database = (string) "dbfrajola";// nome do database


// Estabelecendo conexão com o banco de dados
$conexao = mysqli_connect($host, $user, $password, $database);
    
return $conexao;
    
}

?>