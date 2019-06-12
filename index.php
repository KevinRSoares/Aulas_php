<?php
    $page = $_GET['page'];
    switch($page)
    {    
        case 'Login':
            default:
            $script = "login";
            $titulo = "Login";
            $login = " active";
            break; 
        case 'Usuarios':
            $script = "usuarios";
            $titulo = "Usuarios";
            break;   
        case 'Home':
            $script = "home";
            $titulo = "Home";
            break;           
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include 'Views/header.php' ?>
		<title>Nome do Sistema - <?php echo $titulo ?></title>
        <script src="Content/dist/js/<?php echo $script ?>.script.js"></script>    
        <script src="Content/dist/js/cadastrarUsuario.script.js"></script>           
	</head>
	<body>
        <?php 
            include 'Views/verificaLogin.php';
            if($page != 'Login'){
                include 'Views/navbar.php';
            }
            include 'Views/'.$script.'.php';
        ?>
        </div>
        <?php
            include 'Views/footer.php';
        ?>      
	</body>
</html>