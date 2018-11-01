<?php
class cliente{
    private $codigo;
    private $nome;
    private $cpf;
    private $email;
    public function cliente($nome,$cpf,$email){
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->email=$email;
    }
    public function getCodigo(){
      return $this->codigo;
    }
    public function setCodigo($codigo){
      $this->codigo = $codigo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getCPF(){
        return $this->cpf;
    }
    public function setCPF($cpf){
        $this->cpf = $cpf;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
}

//$cliente =  new cliente("Catarina Camões","73123193","Caca@outlook.com");
//$cliente2 =  new cliente("Lourenço Maria","09303047","marilouço@yahoo.com.br");
//$cliente3 =  new cliente("Mané João","09121323","manejoao@gmail.com");
//$cliente4 =  new cliente("Lorena Tropicana","039812391","lorelore@gmail.com");

//var_dump($cliente);
//var_dump($cliente2);
//var_dump($cliente3);

?>
