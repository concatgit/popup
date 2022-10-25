<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đọc file demo</title>
</head>
<body>
	<table style="border-collapse:collapse" border="1" width="100%">
		<tr>
			<th>STT</th>
			<th>Mã hàng</th>
			<th>Tên hàng</th>
			<th>Số lượng</th>
			<th>Giá nhập</th>
			<th>Giá bán</th>
			<th>Lợi nhuận</th>
		</tr>
    <?php
        $file=fopen("Test.txt","r");
        $count=0;
        while(!feof($file))
        {
            $count++;
            $line=fgets($file);
            $list=explode("  ",$line);
    ?>
        <tr>
        <td><?=$count?></td>
        <td><?=$list[0]?></td>
        <td><?=$list[1]?></td>
        <td><?=$list[2]?></td>
        <td><?=$list[3]?></td>
        <td><?=$list[4]?></td>
        <td><?=$list[2]*($list[4]-$list[3])?></td>
        </tr>
    <?php
        }
     ?>
     </table>
</body>
</html>