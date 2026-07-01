
<?php
include "conexao.php";
$sql = "SELECT
 funcionarios.Nome AS Funcionario,
 funcionarios.Email,
 funcionarios.Ramal,
 funcionarios.Salario,
 cargos.Nome AS Cargo,
 setor.Nome AS Setor
 FROM funcionarios
 INNER JOIN cargos
 ON funcionarios.CargoID = cargos.CargoID
 INNER JOIN setor
 ON funcionarios.SetorID = setor.SetorID
 ORDER BY funcionarios.Nome ASC";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<div class="tabela-container">
<table class="tabela-dados">
<thead>
<tr>
<th>Funcionário</th>
<th>E-mail</th>
<th>Ramal</th>
<th>Cargo</th>
<th>Setor</th>
<th>Salário</th>
</tr>
</thead>
<tbody>
<?php while ($funcionario = mysqli_fetch_assoc($resultado)) { ?>
<tr>
<td><?php echo $funcionario["Funcionario"]; ?></td>
<td><?php echo $funcionario["Email"]; ?></td>
<td><?php echo $funcionario["Ramal"]; ?></td>
<td><?php echo $funcionario["Cargo"]; ?></td>
<td><?php echo $funcionario["Setor"]; ?></td>
<td>R$ <?php echo number_format($funcionario["Salario"], 2, ",", "."); ?></td>
</tr>
<?php } ?>