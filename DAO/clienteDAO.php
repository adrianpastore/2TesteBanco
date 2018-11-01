<?php
  require_once('cliente.php');


  $clienteX = new cliente ($_POST['nome'], $_POST['cpf'], $_POST['email']);
  $clienteDao = new clienteDAO();
  $clienteDao -> add($clienteX);


/*
  $codcliente = $_GET['codcliente'];
  $clienteDao = new clienteDAO();
  $clienteDao -> deleta($codcliente);
*/




class clienteDAO{
    private function criaConexao(){ //privado
        $var = "port=5432 dbname=Teste user=postgres password=1234";
        return pg_connect($var);
    }
    public function lista(){//publico
        $conn = $this->criaConexao();
        $sql = 'select * from cliente';
        $res = pg_query($conn,$sql);
        $listaCliente = array();
        while($cliente = pg_fetch_assoc($res)){
            array_push($listaCliente,$cliente);
        }
        pg_close($conn);
        return $listaCliente;
    }
    public function add($cliente){//publico
        $conn = $this->criaConexao();
        $sql2 = 'INSERT INTO cliente (nome,cpf,email) VALUES ($1, $2, $3)';
        $vetor = array($cliente->getNome(), $cliente->getCPF(), $cliente->getEmail());
        pg_query_params($conn,$sql2,$vetor);
        pg_close($conn);
    }
    public function deleta($codcliente){
        $conn = $this->criaConexao();
        $sql3 = 'DELETE FROM cliente WHERE codcliente = $1';
        $vetor2 = array($_GET['codcliente']);
        pg_query_params($conn,$sql3,$vetor2);
        pg_close($conn);
    }
    public function att($codigo, $novoNome, $novoCPF, $novoEmail){
        $conn = $this->criaConexao();
        $sql4 = 'UPDATE cliente SET nome = $2, cpf = $3, email = $4 WHERE codcliente = $1';
        $vetor2 = array($codigo, $novoNome, $novoCPF, $novoEmail);
        pg_query_params($conn,$sql4,$vetor2);
        pg_close($conn);
    }
    public function busca($codigo){
      $conn = $this->criaConexao();
      $sql5 = 'SELECT * FROM cliente WHERE codcliente = $1';
      $vetor3 = array($codigo);
      $res = pg_query_params($conn,$sql5,$vetor3);
      $buscaCliente = array();
      while($cliente = pg_fetch_assoc($res)){
          array_push($buscaCliente,$cliente);
      }
      pg_close($conn);
      return $buscaCliente;
    }
    public function buscaCursos($limit, $offset){
        $conn = $this->criaConexao();
        $sql6 = 'SELECT * FROM cliente LIMIT $1 OFFSET $2';
        $vetor4 = array($limit, $offset);
        $res = pg_query_params($conn,$sql6,$vetor4);
        $clientes = array();
        while($cliente = pg_fetch_assoc($res)){
            array_push($clientes,$cliente);
        }
        pg_close($conn);
        return $clientes;
    }
}
require_once('lista.php');
//var_dump($clienteDao -> lista());
//$clienteDao -> add($cliente);
//$clienteDao -> add($cliente2);
//$clienteDao -> add($cliente3);
//$clienteDao -> deleta(8);
//$clienteDao -> att(11,"Lourenço Maria", 2827178929, "mariloure@yahoo.com.br");
//var_dump($clienteDao -> busca(7));
//var_dump($clienteDao -> buscaCursos(4,3));
/*
$curso1 = new CursoDAO();
foreach ($clientes as $c) {
    ?> <td> <?php echo $c->getNome() ?> </td>
<?php } ?>
*/


?>
