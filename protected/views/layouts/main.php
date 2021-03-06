<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/layout.css'); ?>
<!DOCTYPE html>

<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--Google Fonts!-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		
		<!--Bootstrap!-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!--Jquery!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<!--Angular JS!-->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
		
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>
		
		<div class="container-fluid">
			<?php echo $content; ?>
		</div>
		
	</body>

</html>
