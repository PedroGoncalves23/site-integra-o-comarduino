<?php 


if(isset($_POST['cadastrar'])){
    include_once('conexao.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(login,senha) VALUES ('$login','$senha')");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Estufa Smart</title>
</head>

<body>

  <!-- <main>
    <p>Main</p>
  </main> -->
  <header>
    <div class="container text-center">
      <div class="row">
        <div class="col align-self-center">
          <div class="row justify-content-start">
            <div class="col-11">
              <a href="login.php" style="color: #FFFFFF; opacity: 80%;">Login</a>
              <a href="" style="color: #FFFFFF; border-bottom: 2px solid blueviolet">Cadastrar</a>
            </div>

          </div>
          <form method="POST" action="cadastro.php">
        
            <div class="form-floating mb-3">
              <input type="email" class="form-control-sm" name="login" id="login" placeholder="Email">
              <!-- <label for="floatingInput">Email</label> -->
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control-sm" name="senha" id="senha" placeholder="Senha">
              <!-- <label for="floatingPassword">Senha</label> -->
            </div>
          
            <br>

            <button type="submit" id="cadastrar" name="cadastrar" class="btn btn-primary btn-sm" style="border-radius: 100px; width: 100px; background-color:#6930C3;">Cadastrar</button>
          </form>
        </div>

        <div class="col-5">
          <p class="titulo">Projeto - Estufa Inteligente</p>
          <img src="greenhouse 1.png" alt="" widht="80px" height="100px">
        </div>

      </div>
    </div>

  </header>
  <!-- <nav>
    <p>Nav</p>
  </nav> -->

</body>

</html>