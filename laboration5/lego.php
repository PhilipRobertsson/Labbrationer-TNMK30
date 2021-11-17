<!DOCTYPE html>

<head>
    <meta name='Author' content='Max Wiklundh & Philip Robertsson'>
    <meta name='Description' content='Laboration 5'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboration 5</title>
    <link rel="stylesheet" media="screen" href="styles.css" type="text/css">

    <script src="scripts.js"></script>
</head>
<body>
	<div>
		<form action="lego_debug.php" method="get"> <!--PHP_SELF-->
			<label for="setNum">Set ID:</label>
			<input type="text" id="setNum" name="setID" placeholder="Enter ID" autofocus>			
			<input type="submit" value="search"><br>
		</form>
	</div>
	<?php
		$connection = mysqli_connect("mysql.itn.liu.se","lego","","lego");
		$prefix = "https://weber.itn.liu.se/~stegu/img.bricklink.com/";
		$setID = "361-1";
		if(!$connection){
			die('MySQL connection error');
		}		
		if($_SERVER['REQUEST_METHOD'] === 'GET'){
			if(mysqli_real_escape_string($connection, $_GET['setID']) != $setID && mysqli_real_escape_string($connection, $_GET['setID']) !=""){
				$setID = mysqli_real_escape_string($connection, $_GET['setID']);
			}
		}
		$sql_query = "SELECT inventory.SetID, inventory.Quantity, inventory.ItemID, inventory.ItemtypeID, inventory.ColorID,
		colors.Colorname, parts.Partname FROM inventory, colors, parts WHERE inventory.SetID ='$setID' AND colors.ColorID=inventory.ColorID AND parts.PartID=inventory.ItemID";
		//images.has_gif, images.has_jpg, imges.has_largegif, images.has_largejpg,
		$result = mysqli_query($connection, $sql_query);
		
		print("<h2>Inventory of $setID</h2>");
		print("<img id='setImg' src='$prefix/SL/$setID.jpg' alt='image'>");
		print("<p>Parts in set: </p>");
		
		print("<table>
					<tr>
						<th>Quantity</th>
						<th>Picture</th>
						<th>Color</th>
						<th>Part name</th>
					</tr>");
		while ($row = mysqli_fetch_array($result)){
			print("\n<tr>");
			$quantity = $row['Quantity'];
			print("<td>$quantity</td>");
			
			
			$imgFolder = $row['ItemtypeID'];
			$imgColor = $row['ColorID'];
			$imgSrc = $row['ItemID'];
			$sql_image_search = "SELECT * FROM images WHERE ItemTypeID='P' AND ItemID='$imgSrc' AND ColorID='$imgColor'";
			$img_search = mysqli_query($connection, $sql_image_search);
			$img_info = mysqli_fetch_array($img_search);
			if($img_info['has_jpg']) {
				$filename = "$imgFolder/$imgColor/$imgSrc.jpg";
			} else if($img_info['has_gif']){
				$filename = "$imgFolder/$imgColor/$imgSrc.gif";
			} else{
				$filename = "noimage_small.png";
			}
			
			print("<td><img src='$prefix$filename' alt='$imgSrc'></td>");		
			
			$color = $row['Colorname'];
			print("<td>$color</td>");
			$partName = $row['Partname'];
			print("<td>$partName</td>");
			print("</tr>");
		}// end while
		mysqli_close($connection);
		print("</table>\n");
	?>
</body>