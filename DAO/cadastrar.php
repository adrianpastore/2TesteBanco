  <?php
require_once('header.php');
?>

<form action="clienteDAO.php" method="post">
    <div class="form-group">
      <label>Nome:</label>
      <input name="nome" type="text" class="form-control" placeholder="Nome do cliente">
    </div>
    <div class="form-group">
      <label>CPF:</label>
      <input name="cpf" type="text" maxlength="14" class="form-control" placeholder="CPF do cliente">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input name="email" type="email" class="form-control" placeholder="Email do cliente">
    </div><br>
    <input name="cadastrar" class="btn btn-outline-info" type="submit" value="Cadastrar"><a href="lista.php"></a>
</form>



<?php

require_once('footer.php');

?>
