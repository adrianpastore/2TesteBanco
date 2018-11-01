<?php
    require('back-end/clienteDAO.php');

    $banco = new ClienteDAO();
    $banco->deleta($_GET['codcliente']);
    header('Location: principal.php'); 
?>