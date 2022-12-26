<?php

//conectar ao servidor de banco de dados
require_once("../Constantes/conecta_pdo.php");
//Chama a Classe Usuarios
require_once("../Classes/Maquina.php");

$pdo = new PDO(DSN, USER, SENHA);
$maquina = new Maquina($pdo);
$lista = $maquina->listarMaquinas();


?>
<html>
    <body>
    <div class="panel panel-default">
        <div class="panel-heading titulo-tabela"><a class="glyphicon glyphicon-plus-sign"></a>&nbsp; Lista de máquinas</div> 
            <table  class="table table-striped" id="example">
                <thead>                  
                    <tr>
                        <th>id</th>
                        <th>Patrimônio</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Matricula</th>
                        <th>Setor</th>
                        <th>Solicitação</th>
                        <th>Dt entrada</th>
                        <th>Ramal</th>
                        <th>Tecnico</th>
                        <th>Fonte</th>
                        <th>Usuário</th>
                    </tr>
                </thead >
                        <tbody class="corpo-tabela">
                            <?php foreach ($lista as $i=> $linha) : ?>
                                <tr>
                                  <td><?php echo $linha['id']?></td>
                                  <td><?php echo $linha['patrimonio']?></td>
                                  <td><?php echo $linha['nome']?></td>
                                  <td><?php echo $linha['descricao'] ?></td>
                                  <td><?php echo $linha['matricula'] ?></td>
                                  <td><?php echo $linha['setor']?></td>
                                  <td><?php echo $linha['solicitacao']?></td>
                                  <td><?php echo $linha['dt_entrada']?></td>
                                  <td><?php echo $linha['ramal']?></td>
                                  <td><?php echo $linha['tecnico']?></td>
                                  <td><?php echo $linha['fonte']?></td>
                                  <td><?php echo $linha['usuario']?></td>
                                </tr> 
                            <?php endforeach;?>    
                        </tbody>
            </table> 
        </div>
              <div class="modal-footer">
              <form action="cp_maquina.php" method="post">
                   <input type="submit" class="btn btn-success" value="Voltar">
              </form>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>
