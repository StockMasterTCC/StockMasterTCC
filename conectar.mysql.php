<?php
//configuração de banco de dados
$servidor = "localhost: 3306";
$usuario_bd = "root";
$senha_bd = "";
$banco = "usuario";

$conexao = new mysqli($servidor, $usuario_bd, $senha_bd, $banco);

/*Ainda falta configurar e consertar o banco de dados (MySQL) e criar a tabela de usuários,
mas os arquivos conectar.mysql.php, login.php e cadastro.php estão quase prontos.
E sim, possui varios erros nesses arquivos na hora de cadastrar e logar.
*/

//Cookies está ausente no projeto, mas adicionaremos para manter o usuário logado.
?>