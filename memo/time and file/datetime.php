<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đọc file demo</title>
</head>
<body>
    <?php 
         date_default_timezone_set("Asia/Ho_Chi_Minh");
         $day=date("d/m/Y");
         $hour=date("H:i:s");
         $h=date("H"); 
    ?>
    <h3 style="margin-top:50px">
     Hôm nay là ngày:<?=$day?>
    </h3>
    <h3> Bây giờ là:<?=$hour?></h3>
    <?php 
        if($h>=0&&$h<=12)
        {
            $result="Chào buổi sáng";
        }else if($h>12&&$h<=18)
        {
            $result="Chào buổi chiều";
        }else
        {
            $result="Chào buổi tối";
        }
    ?>
    <h2>Thời gian hiện tại của TP.Hồ Chí Minh là:<?=date_default_timezone_get();?></h2>
    <h3><?=$result?></h3>
</h3>
   


</body>
