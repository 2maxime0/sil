<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Info pointage</title>
</head>
<body>
	Pour une arrivée à <?php $a=$_POST['arrivee']; echo $a ?> et un départ à <?php ;$h=date('H')+1 ;$m=date('i');echo $h.':'.$m  ?> : 
	<br>Credit horaire : <?php $ha=strtotime($a);
	$hd=strtotime($h.':'.$m.':00');
	$t=strtotime('08:21:00');
	$o=strtotime('00:00:00');
	$t=$t-$o;
	$e=($hd-$ha);
	if($e<$t){
		$e=$t-$e;
		echo '-'.date('H:i',$e);
	}
	else{
		$e=$e-$t;
		echo date('H:i',$e);
	} 
	 
	?>
	<br>Heure de départ conseillé : <?php echo date('H:i',($ha+$t)); ?>
</body>
</html>