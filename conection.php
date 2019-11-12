<?php




// $server = "127.0.0.1";
// $user = "root";
// $password = "5122";
// $db_name = "bd_restaurante";
// $port = "3306";


$conection_data_base = new mysqli($server, $user, $password, $db_name, $port);
mysqli_set_charset($conection_data_base, "utf8");


if ($conection_data_base->connect_error) {
  echo "Fail in connection";
} else { }



function get_destaque()
{
  global $conection_data_base;
  $sql_busca_destaque = "SELECT * FROM pratos WHERE destaque=1 ;";
  $retorno = $conection_data_base->query($sql_busca_destaque);
  return $retorno;
}


function insert_pratos($codigo, $nome, $categoria, $descricao, $preco, $calorias, $destaque)
{
  $sql = "INSERT INTO pratos(codigo,nome,categoria,descricao,preco,calorias,destaque) values ('{$codigo}','{$nome}','{$categoria}','{$descricao}','{$preco}','{$calorias}','{$destaque}')";
}



function get_categorias()
{
  global $conection_data_base;
  $sql_busca_destaque = "SELECT DISTINCT categoria FROM pratos;";
  return $conection_data_base->query($sql_busca_destaque);
}


function get_all_pratos_for_categoria($categoria)
{
  global $conection_data_base;
  $sql_busca_todos = "SELECT * FROM pratos WHERE categoria = '{$categoria}';";
  $categoria=$conection_data_base->query($sql_busca_todos);
  return $categoria;

}

function get_pratos_for_codigo($cod_prato)
{
  global $conection_data_base;
  $sql_busca_todos = "SELECT * FROM pratos WHERE codigo = '{$cod_prato}';";
  $return_pratos=$conection_data_base->query($sql_busca_todos);
  return $return_pratos;

  }







?>









<!-- 

$server = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'restaurante';
$port = '8889';

$db_connect = new mysqli($server,$user,$password,$db_name,$port);
mysqli_set_charset($db_connect,"utf8");

if ($db_connect->connect_error) {
    echo 'Falha: ' . $db_connect->connect_error;
} else {
    echo 'Conexão feita com sucesso' . '<br><br>';


    
}
  -->