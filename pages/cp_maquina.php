
<?php
require_once("../Constantes/conecta_pdo.php");
require_once("../Classes/Maquina.php");

$pdo = new PDO(DSN, USER, SENHA);
$maquina = new Maquina($pdo);

?>
 <form action = "salvar.php" method= "post">

<div class="form-group">= 
        <h2>Controle Helpdesk</h2>

    <label class="col-md-4 control-label">Patrimônio</label>
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-asterisk"></i>
            </span>
            <input id="patrimonio" name="patrimonio" class="form-control" required="true" type="text">
        </div>
    </div>
</div>

<label class="col-md-4 control-label">Descrição</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-asterisk"></i>
        </span>
        <input id="descricao" name="descricao" class="form-control" required="true" type="text">
    </div>
</div>
<br><br>
<label class="col-md-4 control-label">Nome da máquina</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-asterisk"></i>
        </span>
        <input id="nome" name="nome" class="form-control" required="true" type="text">
    </div>
</div>
<br><br>
<label class="col-md-4 control-label">Setor</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-asterisk"></i>
        </span>
        <input id="setor" name="setor" class="form-control" required="true" type="text">
    </div>
</div>
<br><br>
<label class="col-md-4 control-label">Usuário</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-asterisk"></i>
        </span>
        <input  id="usuario" name="usuario" class="form-control" required="true" type="text">
    </div>
</div>
<br><br>
<label class="col-md-4 control-label">Ramal</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-phone"></i>
        </span>
        <input id="ramal" name="ramal" class="form-control" required="true" type="number" maxlength="4" size="4">
    </div>
</div>
<br><br>
<label class="col-md-4 control-label">Matrícula</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-asterisk"></i>
        </span>
        <input id="matricula" name="matricula" class="form-control" required="true" type="number" min="0">
    </div>
</div>

<br><br>
<label class="col-md-4 control-label">Data de Entrada</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-calendar"></i>
        </span>
        <input id="dt_entrada" name="dt_entrada" class="form-control" required="true" type="text" value="<?php echo date('d/m/y')?>" readonly="">
    </div>
</div>

<br><br>
<label class="col-md-4 control-label">Técnico</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
        </span>
        <input id="tecnico" name="tecnico" class="form-control" required="true" type="text">
    </div>
</div>


<br><br>
<label class="col-md-4 control-label">Fonte?</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-asterisk"></i>
        </span>
        <select class="form-control" id="fonte" name="fonte" required="true">
            <option selected disabled value="">SELECIONE</option>
            <option value="sim">SIM</option>
            <option value="nao">NÃO</option>
        </select>
    </div>
</div>

<br><br><br>
<label class="col-md-4 control-label">Solicitação</label>
<div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-pencil"></i>
        </span>
        <textarea id="solicitacao" rows="4" name="solicitacao" placeholder="Informa&ccedil;&otilde;es" class="form-control" required="true"></textarea>
    </div>
</div>
<br><br> 



    <div class="form-group">
        <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <input id="botaoCriar" name="botaoCriar" placeholder="Criar" class="btn btn-success" required="true" value="Confirmar" type="submit">
                &nbsp;
                <a href="http://localhost/test/pages/cp_maquina" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </div>
    </form>
    <form action="listar_maquina" method="post">
<input type="submit" class="btn btn-success" value="Lista de máquinas">
</form>
</center>