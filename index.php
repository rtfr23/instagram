<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="log.png">
	<style type="text/css">

	</style>
  </head>
  <body>
	<div class="p-3 border-bottom sticky-top bg-white"> <!--шапка-->
		<div class="col-8 mx-auto">
			<div class="row">
				<div class="col-4">
					<div class="row">
						<div class="col-1 px-0">
							<img src="logo.png" class="w-100">
						</div>
						<div class="col-1 px-0 text-center">
							<img src="line.png" class="w-50">
						</div>
						<div class="col-4 px-0">
							<img src="logo2.png" class="w-100">
						</div>
					</div>
				</div>
				<div class="col-4">
					<input type="" name="" placeholder="поиск" class="border rounded text-center px-3 ml-5 border-secondary">
				</div>
				<div class="col-4">
					<div class="row">
						<div class="col-6"></div>
						<div class="col-2 px-0 pl-2">
							<img src="1.png" class="w-50">
						</div>
						<div class="col-2 px-0 pl-2">
							<div class="dropdown">
							  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <img src="2.png" class="w-50">
							  </a>
							</div>
						</div>
						<div class="col-2 px-0 pl-2">
							<img src="3.png" class="w-50">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		$con = mysqli_connect('127.0.0.1', 'root', "", "instagram");
		$q = mysqli_query($con, "SELECT * FROM posts");
		$d = mysqli_num_rows($q);
	?>
	<div class="col-6 mx-auto" > <!--ГЛАВНЫЙ БЛОК-->
		<div class="row"> 
			<!--ЛЕВЫЙ БЛОК. ДИВ ДЛЯ ПОСТОВ-->
			<div class="col-8 px-0 my-2">
				<form action="update.php" method="GET">
					<input type="" name="id" class="form-control col-4 mt-2" placeholder="id">
					<input type="" name="text" class="form-control col-4 mt-2" placeholder="text">
					<input type="" name="img" class="form-control col-4 mt-2" placeholder="img">
					<button class="btn bg-primary text-white mt-2">Исправить</button>
				</form>
				<!--САМ ПОСТ-->
				<?php 
	 				for($i=0;$i<mysqli_num_rows($q);$i++){
	 				$result1 = $q->fetch_assoc();

	 			?>
				<div class="mt-5 border rounded">   
					<div class="col-12 px-1">
						<div class="row">
							<div class="col-1 text-right pb-4 pt-2 px-0 ml-4">
								<img src="3.png" class="w-100 rounded-circle">
							</div>
							<div class="col-10 pb-4 pt-3 text-left">
								<h6 class="mb-0"><?php echo $result1["user"];?></h6>
								<p class="mb-0">Якутск</p>	
							</div>													
						</div>
					</div>
					<div class="col-12" style="height: 400px; background-image: url(<?php echo $result1["img"]?>); background-size: 100% 100%"> <!--картинка поста-->
					</div>
					<div class="col-12 py-2">  <!--текстовые элементы поста-->
						<div>
							<p>Lol, KEK еще 13</p>
						</div>
						<div>
							<p><?php echo $result1["text"] ?></p>
						</div>
						<div>
							<p>5 недель назад</p>
						</div>
						<div>
							<button class="red btn bg-primary text-white">Редактировать</button>
							<form action="update.php" method="GET" >
								<div class="box" style="display: none;">
									<input  class="form-control col-4 mt-2" type="" name="id" value=<?php echo $result1["id"]?>>
									<input  class="form-control col-4 mt-2" type="" name="img" value=<?php echo $result1["img"]?>>
									<input  class="form-control col-4 mt-2" type="" name="text" value=<?php echo $result1["text"]?>>
									<button class="btn bg-primary text-white">Сохранить</button>
								</div>
							</form>
						</div>
						<div>
							<form action="delete.php" method="GET" class="form">
								<input type="" name="id" style="display: none;" value=<?php echo $result1["id"]?>>
								<button class="btn bg-primary text-white" style="position: absolute; left: 200px; bottom: 8px;">Удалить</button>
							</form>
						</div>					
					</div>
				</div>
				<?php }?>
				<!-- ПОСТ ЗАКРЫЛСЯ-->

			
			</div> 
			<!--ДИВ ДЛЯ ПОСТОВ закрылся-->


			<div class="col-4 mt-5">  <!--ПРАВЫЙ БЛОК. ПОДПИСКИ И ТД-->
				<div class="my-2 border rounded px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-2 px-0">
								<img src="3.png" class="w-100 rounded-circle">
							</div>
							<div class="col-10">
								<h6 class="mb-0"><?php echo $result1["user"];?></h6>
								<p class="text-secondary mb-0">Name</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-2 border my-2 rounded  px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-4 text-left px-0 pb-3 pt-1">Истории</div>
							<div class="col-8 text-left pb-3 pt-1">Смотреть все</div>
						</div>
						<div class="row">
							<div class="col-3 px-1">
								<img src="JF.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>jimmyfallon</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="pew.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>PewDiePie</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="kodz.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>Hideo Kojima</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="my-2 border rounded px-3 py-2">  <!--ПРАВЫЙ БЛОК. РЕКОМЕНДАЦИИ-->
					<div class="col-12">
						<div class="row">
							<div class="col-8 text-left px-0 pb-3 pt-1">Рекомендации для вас</div>
							<div class="col-4 text-left pb-3 pt-1">Все</div>
						</div>
						<div class="row">
							<div class="col-3 px-2">
								<img src="mbn.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">mbn360</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="9gag.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">9gag</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="groot.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 " >
								<p class="mb-0">groot</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
					</div>
				</div>
				<a href="admin.php">Добавить панель</a>
			</div>
		</div>
	</div>


	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	let red = document.querySelectorAll('.red');
    	let box = document.querySelectorAll('.box');
    	for(let i = 0; i <  <?php echo $d ?>;i++){
    		red[i].onclick = function(){
    			red[i].style.display = 'none';
    			box[i].style.display = 'block';
    		}
    	};
    </script>
  </body>
</html>