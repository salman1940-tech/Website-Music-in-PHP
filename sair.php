    <?php
	session_start();
//Destrói
    session_destroy();
 
    //Limpa

    unset ($_SESSION['nome']);
   
 
    //Redireciona para a página de autenticação
     header('location:index.php');
 ?>
 Saindo...
