<?php

class Maquina 
{

private $id;
private $patrimonio;
private $nome; 
private $descricao;
private $matricula; 
private $setor;
private $solicitacao;
private $dt_entrada;
private $ramal;
private $tecnico;
private $fonte;
private $usuario;

private $pdo;

public function __construct(PDO $pdo)
{
    $this->pdo = $pdo;
}
 
  public function setId($id){
    $this->id = $id;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getNome(){
    return $this->nome;
  }

  public function setDescricao($descricao){
    $this->descricao = $descricao;
  }

  public function getDescricao(){
    return $this->descricao;
  }

  public function setUsuario($usuario){
      $this->usuario = $usuario;
  }

  public function getUsuario(){
    return $this->descricao;
}

  public function setMatricula($matricula){
      $this->matricula = $matricula;
  }

  public function getMatricula(){
      return $this->matricula;
  }

  public function setSetor($setor){
      $this->setor = $setor;  
  }

  public function getSetor(){
      return $this->setor;
  }

  public function setSolicitacao($solicitacao){
      $this->solicitacao = $solicitacao;
  }

  public function getSolicitacao(){
      return $this->solicitacao;
  }


  public function setDt_entrada($dt_entrada){
      $this->dt_entrada = $dt_entrada;
  }

  public function getDt_entrada(){
      return $this->dt_entrada;
  }

  public function setRamal($ramal){
      $this->ramal = $ramal;
  }

  public function getRamal(){
      return $this->ramal;
  }

  public function getDt_saida(){
      return $this->dt_saida;
  }

  public function setTecnico($tecnico){
      $this->tecnico = $tecnico;
  }

  public function getTecnico(){
      return $this->tecnico;
  }

  public function setFonte($fonte){
      $this->fonte = $fonte;
  }

  public function getFonte(){
      return $this->fonte;
  }

  public function setPatrimonio($patrimonio){
      $this->patrimonio = $patrimonio;
  }

  public function getPatrimonio(){
      return $this->patrimonio;
  }

  public function getId(){
    return $this->id;
  }

  public function entrarMaquina(){
		
    $sql="INSERT INTO cadastro_maquina (nome, descricao,patrimonio, matricula, setor, solicitacao, dt_entrada, tecnico, fonte, usuario, ramal)
          values('$this->nome','$this->descricao','$this->patrimonio','$this->matricula','$this->setor','$this->solicitacao','$this->dt_entrada','$this->tecnico','$this->fonte','$this->usuario','$this->ramal')";
       
        //var_dump($sql);exit;
       $result = $this->pdo->exec($sql);


       if(empty($result)){
           return 'nOK';
       }else{
           return 'OK';
       }   
}

 
public function listarMaquinas(){

    $sql= "SELECT * FROM cadastro_maquina";
    return $this->pdo->query($sql)->fetchAll();
 }
 
} 

?>
