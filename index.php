<?php


//verificar o que foi passado no formulario

if(isset($_POST['submit']) ){
  $email= $_POST['email'];
  $senha=$_POST['senha'];

$sanitized_email= filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitized_senha=filter_var($senha,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//só irá prosseguir se for tudo preenchido
if(!empty($sanitized_email) && !empty($sanitized_senha)){
    header('Location: area_logado.php');
}else{
    echo "você precisa preencher todos os campos para prosseguir!";
}
 

}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Área de login</h1>

    <form action="" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

        </div>

        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>

        <input type="submit" value="Logar" name="submit">
    </form>
    
</body>
</html>