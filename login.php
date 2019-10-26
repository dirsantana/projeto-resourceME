<?php include_once('header.php'); 

if(isset($_SESSION['logado']) && !isset($_GET['logout'])) {
    header('Location: admin.php');
} else if (isset($_SESSION['logado']) && isset($_GET['logout'])) {
    header('Location: index.php');
}



?>



<main >
<div class="container">
    <div class="row">
        <div class="col">  
        <img src="img/login.svg" class="img-fluid" alt="">
        </div>
        <div class="col">
        <h1 class="mt-5">Login</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ; ?>">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ; ?>">                 
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="manter_conectado">Manter conectado
                    </label>               
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-primary" name="login" id="login  ">Entrar</button>                
                </div>
            </form>
            <?php
                if(isset($erro)) {
                    echo "<div class='alert alert-warning'> $erro </div>";
                }
            ?>
        </div>
    </div>
</div>
</main>

<?php include_once('footer.php'); ?>