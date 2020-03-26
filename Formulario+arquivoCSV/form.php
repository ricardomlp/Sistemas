<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Cadastro</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>


<form action="confere.php" method="POST">
    <fieldset>
        <legend>Dados pessoais</legend>
        <label>Nome: </label><br/>
    	<input type="text" name="f_nome" size="30" maxlength="30" placeholder="Seu Nome"/><br/><br/>
    	<label>Sobrenome: </label><br/>
    	<input type="text" name="f_snome" size="30" maxlength="30" placeholder="Seu Sobrenome"/><br/><br/>
    	<label>Gênero: </label><br/>
    	<select name="f_genero">
    		<option>Masculino</option>
    		<option>Feminino</option>    		
    	</select><br/><br/>
    	<label>Cidade: </label><br/>
    	<input type="text" name="f_cidade" size="30" maxlength="30" placeholder="Sua Cidade"/><br/><br/>
    	<label>Estado: </label><br/>
    	<select name="f_estado">
            <option> </option>
    		<option>MA</option>
    		<option>PI</option>
    		<option>CE</option>
    		<option>RN</option>
    		<option>PE</option>
    		<option>PB</option>
    		<option>SE</option>
    		<option>AL</option>    		
    	</select><br/><br/>
        <input type="submit" value="Enviar">
        <input type="reset" name="Apagar">
    </fieldset>
</form>