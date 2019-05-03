<?php

$angka=0;
$poin=intval($angka);


if(isset($_POST['1']))
	{
		//select image from db to delete
		$poin=0;
		echo "<script>alert('Jawabanmu Salah')";
		header("Location: tanya2.php");
	}

else if(isset($_POST['2']))
	{
		//select image from db to delete
		$poin++;
		echo "<script>alert('Jawabanmu Benar')";
		header("Location: tanya2.php");
	}
else if(isset($_POST['3']))
	{
		//select image from db to delete
		$poin=0;
		echo "<script>alert('Jawabanmu Salah')";
		header("Location: tanya2.php");
	}

else if(isset($_POST['4']))
	{
		//select image from db to delete
		$poin=0;
		echo "<script>alert('Jawabanmu Salah')";
		header("Location: tanya2.php");
	}
	echo "<form action='tanya2.php' method='post'";
	echo "<input type='hidden' name='itu' value=".$poin">";
?>