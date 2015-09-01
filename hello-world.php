<?php
$descriptor = "exiting";
$first_num = 2;
$second_num = '1';
$fav_num = $first_num + $second_num;
$hungry = false;
$books = array('Ficciones', 'La hija de la fortuna', 'El tiempo entre costuras');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>my first php page</title>
	</head>
	<body>
		<h1>Hello everyone</h1>
		<p>this is truly <?php echo $descriptor; ?> and my favorite number is <?php echo $fav_num; ?></p>
		<?php if ($hungry){ ?>
		<p> and I'm hungry!</p>
		<?php }?>
		<p> And some books in spanish I like are
		<?php
		forEach($books as $book){
			echo $book . "<br>";
		}
		
		?>
		</p>
	</body>
</html>
