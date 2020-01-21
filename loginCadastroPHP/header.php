<?php echo $_SESSION['user_email']; ?>

<header id="header" >    
    <nav class="navbar navbar-expand-lg">      
        <div class="collapse navbar-collapse container" id="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item row">
                    <i class="far fa-edit"></i>
                    <a class="nav-link" href="cadastro.php">Cadastrar </a>
                </li>
                <li class="nav-item row">
                    <i class="fas fa-align-justify"></i>
                    <a class="nav-link" href="listar.php">Listar </span></a>
                </li>
            </ul>

            <?php if(!empty($_SESSION["user_name"])) { 
                echo '<div class="row divuser my-2 my-lg-0">
                    <div class="row divuserinfo">
                        <label for="userimg" class="navuser">', $_SESSION['user_name'], '</label>
                        <figure class="fig">
                            <img src="img/img-user-geral.png" name="userimg" class="img-36 rounded-circle" alt="...">
                        </figure>
                    </div>
                </div>';
            }; ?>

        </div>
    </nav>
</header>
