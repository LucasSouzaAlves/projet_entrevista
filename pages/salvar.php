<?php 

require_once('../Classes/Maquina.php');
require_once('../Constantes/conecta_pdo.php');

$pdo = new PDO(DSN,USER,SENHA);
$maquina = new Maquina($pdo);




$maquina->setNome($_POST['nome']);
$maquina->setDescricao($_POST['descricao']);
$maquina->setPatrimonio ($_POST['patrimonio']);
$maquina->setDt_entrada($_POST['dt_entrada']);
$maquina->setMatricula($_POST['matricula']);
$maquina->setUsuario($_POST['usuario']);
$maquina->setRamal($_POST['ramal']);
$maquina->setSetor($_POST['setor']);
$maquina->setSolicitacao($_POST['solicitacao']);
$maquina->setTecnico($_POST['tecnico']);
$maquina->setFonte($_POST['fonte']);


$resultado = $maquina->entrarMaquina();



if($resultado == 'OK'){
    echo '<script type="text/javascript">
    alert("Máquina registrada com sucesso!");
    location.href = "http://localhost/test/pages/cp_maquina";
    </script>'; 
} 
else{
    echo '<script type="text/javascript">
    alert("Erro ao cadastrar máquina, por favor tente novamente!");
    location.href = "http://localhost/test/pages/cp_maquina ";
    </script>';
}

?>


