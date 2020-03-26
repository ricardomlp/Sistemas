<?php
$nome = $_POST['f_nome'];
$sobrenome = $_POST['f_snome'];
$sexo = $_POST['f_genero'];
$cidade = $_POST['f_cidade'];
$estado = $_POST['f_estado'];

?>

<h2>Dados recebidos:</h2>
<ul>
    <li>Nome: <strong><?= $nome ?></strong></li>
    <li>Sobrenome: <strong><?= $sobrenome ?></strong></li>
    <li>Gênero: <strong><?= $sexo ?></strong></li>
    <li>Cidade: <strong><?= $cidade ?></strong></li>
    <li>Estado: <strong><?= $estado ?></strong></li>
</ul>
<hr>
<p>Seus dados foram arquivados.</p>
<p><a href="form.php">Deseja inserir outro cadastro?</a></p>
<p><a href="index.html">Continuar com a navegação</a></p>

<?php
$fp = fopen('dados.csv', 'a');
/*$nome;
$sobrenome;
$sexo;
$cidade;
$estado;*/
fwrite($fp, "$nome---$sobrenome---$sexo---$cidade---$estado" . PHP_EOL);
fclose($fp);
?>
