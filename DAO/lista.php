<?php
require_once('header.php');
?>
<body>
<h1>TABELA DE CLIENTES</h1>
<table class="table table-condensed table-hover">
<thead class="thead-dark">
<tr>
<th class="td">codigo</th>
<th class="td">nome</th>
<th class="td">cpf</th>
<th class="td">email</th>
<th class="td"></th>
</tr>
</thead>
<tbody>
<?php
require_once('clienteDAO.php');
$cd = new clienteDAO();
$clientes = $cd->lista();
foreach($clientes as $c) {
echo
'<tr>
<td class="td">'.$c["codcliente"].'</td>
<td class="td">'.$c["nome"].'</td>
<td class="td">'.$c["cpf"].'</td>
<td class="td">'.$c["email"].'</td>
<td class="td">
<a href="atualizar.php?codcliente='.$c["codcliente"].'"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
<a href="deleta.php?codcliente='.$c["codcliente"].'"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
</td>

</tr>';
}
?>
</tbody>
</table>
</body>

<?php
require_once('footer.php');
?>
