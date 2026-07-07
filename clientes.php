<?php
include "conexao.php";
$sql = "SELECT
 ClienteID,
 Nome,
 Empresa,
 Email,
 Telefone,
 Cidade,
 Estado
 FROM clientes
 ORDER BY Empresa ASC";
$resultado = mysqli_query($conexao, $sql);
include "./componentes/header.php";
?>
<h1>Clientes</h1>
<p>Consulta simples de clientes cadastrados no banco de dados.</p>
</section>
<div class="tabela-container">
<table class="tabela-dados">
<thead>
<tr>
<th>ID</th>
<th>Empresa</th>
<th>Contato</th>
<th>E-mail</th>
<th>Telefone</th>
<th>Cidade</th>
<th>UF</th>
</tr>
</thead>
<tbody>
<?php while ($cliente = mysqli_fetch_assoc($resultado)) { ?>
<tr>
<td><?php echo $cliente["ClienteID"]; ?></td>
<td><?php echo $cliente["Empresa"]; ?></td>
<td><?php echo $cliente["Nome"]; ?></td>
<td><?php echo $cliente["Email"]; ?></td>
<td><?php echo $cliente["Telefone"]; ?></td>
<td><?php echo $cliente["Cidade"]; ?></td>
<td><?php echo $cliente["Estado"]; ?></td>
</tr>
<?php
}
include "./componentes/footer.php";

?>