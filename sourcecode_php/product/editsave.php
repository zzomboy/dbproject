<?PHP
	$p_id			= $_POST['p_id'];
	$p_name			= $_POST['p_name'];
	$p_detail		= $_POST['p_detail'];
	$p_price		= $_POST['p_price'];
	$c_id			= $_POST['c_id'];
	$image			= $_FILES['image'];
	$imageinfo		= pathinfo($image['name']);

	include("connect.php");
	//  3.	ตรวจสอบไฟล์ที่แนบมา
	if($image['size']!= 0 && 
			  $imageinfo['extension']!='jpg' && 
			  		$imageinfo['extension']!='gif')
	{
		echo "<script>alert('แนบไฟล์ .gif หรือ .jpg เท่านั้น');
		history.back();</script>";
		exit();
	}

	// 4.	นำคำสั่ง SQL ไปประมวลผลที่ฐานข้อมูล
	$sql = "update product set
			p_name		= '$p_name',
			p_detail	= '$p_detail',
			p_price		= '$p_price',
			c_id		= '$c_id'
			where p_id	= '$p_id'";
	mysql_query($sql) or die("error=$sql");

	// 5.	ย้ายรูปเก็บในตำแหน่งที่ต้องการ
	if($image['size']!= 0)
	{
		$imagename = "$p_id.jpg";
		move_uploaded_file($image['tmp_name'],"../img/$imagename");
	}
	mysql_close();
	echo "<script>window.location='index.php';</script>";
?>
