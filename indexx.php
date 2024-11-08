<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class='form-aluno'>
    <h2>Cadastro de aluno</h2>
    <form action="aluno.php" method="post"></form>
    <form action="aluno.php">
        <label>Nome</label>
        <input id = "t" name ='nome' type="text">
        <label>Curso</label>
        <select name="curso" required>
            <option value="" disabled>Selecione...</option>
            <option value="A">Administração</option>
            <option value="B">Desenho da Construção Civil</option>
            <option value="C">Energias Renováveis</option>
            <option value="D">Informática</option>
        </select>
        <label>Reside na sede?</label>
        <input name= "sede" value="sim" type="radio"> SIM
        <input name= "sede" value="sim" type="radio"> NÃO
        <label>Esportes</label>
        <input name="esportes" value="futsal" type="checkbox">
        futsal
        <input name="esportes" value="volei" type="checkbox">
        Vôlei
        <input name="esportes" value="basquete" type="checkbox">
        Basquete
        <button name="btn" type="submit">Cadastrar Aluno</button>
    </form>
</div>
    
</body>
</html>