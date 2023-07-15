<?php
require 'DataRequest.php';

$value = $_POST["id"];
$dataFornecedores = new DataRequest();
//Clientes
if ($value == "clientes") {
    echo "<thead>
	<tr>
		<th>
			Nome
		</th>
		<th>
			CPF
		</th>
		<th>
			Endereço
		</th>
		<th>
			Telefone
		</th>
        <th>
			Email
		</th>
	</tr>
</thead>";
    $dadosFornecedores = $dataFornecedores->dadosClientes();
    foreach ($dadosFornecedores as $i) {
        echo "<tr>";
        foreach ($i as $valor) {
            echo "<td>$valor</td>";
        };
        echo "</th>";
    }
}
//Usuarios
if ($value == "usuarios") {
    echo "<thead>
	<tr>
		<th>
			Nome
		</th>
		<th>
			CPF
		</th>
		<th>
			Endereço
		</th>
		<th>
			Telefone
		</th>
        <th>
			Usuario
		</th>
	</tr>
</thead>";
    $dadosFornecedores = $dataFornecedores->dadosUsuarios();
    foreach ($dadosFornecedores as $i) {
        echo "<tr>";
        foreach ($i as $valor) {
            echo "<td>$valor</td>";
        };
        echo "</th>";
    }
}
//Forcedores
if ($value == "fornecedores") {
    echo "<thead>
    <tr>
    <th>
        Nome
    </th>
    <th>
        CPF
    </th>
    <th>
        Cidade
    </th>
    <th>
        Email
    </th>
</tr>
</thead>";
    $dadosFornecedores = $dataFornecedores->dadosFornecedores();
    foreach ($dadosFornecedores as $i) {
        echo "<tr>";
        foreach ($i as $valor) {
            echo "<td>$valor</td>";
        };
        echo "</th>";
    }
}
