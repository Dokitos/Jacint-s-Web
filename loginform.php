<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    
?>
<div class="box">
    <form action="login.php" method="POST">
        <div class="field">
            <div class="control">
                <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
            </div>
        </div>
  
        <div class="field">
            <div class="control">
                <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
            </div>
        </div>
        



        <button type="submit" name="login" class="button btn btn-secondary" >Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>        


    </form>
  </div>

</body>