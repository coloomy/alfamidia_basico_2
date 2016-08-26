<?php
$pessoas = array();

$pessoas = ["ID" => 1,
 "nome" => " Cleber Ferrari",
 "Idade" => "34",
 "CPF" => "98836706053",
"Ativo" => true,
"Endereço" => ["Logradouro" => "Rua Baronesa do Gravataí",
 "Numero" => 117,
"AP" => 24]
]

?>

<table style=""width:50%">
       <tr>
             <td>ID<td>
             <td>Nome<td>
             <td>Idade<td>
             <td>CPF<td>
    </tr>
    <tr>
        <td><php echo $pessoas [ID]; ?></td>
        <td><php echo $pessoas [Nome]; ?></td>
        <td><php echo $pessoas [Idade]; ?></td>
        <td><php echo $pessoas [CPF]; ?></td>
        if ($pessoas["Ativo"]) {
        echo
    </tr>
    
    
    </table>

