<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Postar</title>

	<?php include '../views/head.php'; ?>
</head>
<body>

    <div class="container-fluid">

	  <?php include'../views/menu_principal.php'; ?>

	   <div class="container-fluid">
		  <div class="row">
			<div class="col-sm-3">
			  <?php include '../views/menu_lateral.php';  ?>
			</div>
				
		  <div class="col-sm-8">
		    <div class="panel-usuario">
			 <ol class="breadcrumb">

			    <li><a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home </a></li>

				<li><a href="site.php"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>  Visualizar</a></li>

				<li><a href="cad-postagem.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar</a></li>
                    
              </ol>
             </div>

              <div class="panel panel-default">

                <div class="panel-heading">
                  <h3 class="panel-title"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Estatistica Postagens </h3>
                </div>
                   	 
               <div class="panel-body">

                  <img src="../public/img/g.jpg" width="810px" height="400px">
                   	
                </div>                 
               </div>
            </div>
        </div>
    </div> 	

    <?php require_once '../views/footer.php';?>
</body>
</html>