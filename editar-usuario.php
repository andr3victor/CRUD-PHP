
<div class="col-md-10 mx-auto col-lg-5">
<div class="modal-content rounded-4 shadow">
<?php
    $sql = "SELECT * FROM usuario1 WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST" class="modal-body p-5">
    <h2 class="fw-bold mb-0">Editar Usuário</h2>
    <br>
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" value="<?php print $row->email;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>" class="form-control">
    </div>
   <br>
    <div class="mb-3">
        <button type="submit" class="w-100 btn btn-primary btn-lg">Enviar</button>
    </div>
    
</form>
</div>
</div>
