<?php



	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


	if(isset($_POST["submit"]))
	{
		$check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
		if($check !== false)
		{
			echo "File is an Image : ".$check["mime"].".";
			$uploadOk = 1;
		}else{
			echo "File is not an Image.. ";
			$uploadOk = 0;
		}

	}



if($uploadOk == 0)
{
	echo "<br> File Not Uploaded..";
}else{

	if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file))
	{
		echo "<br> the file ".basename($_FILES["fileUpload"]["name"]). " has been uploadded";

					$conn = new mysqli('localhost', 'root', 'ashish123', 'UserDB');

					if($conn->connect_error)
					{
					  die("Connection Failed..<br>".$connect_error);
					}
					//echo "DataBase Connected Successfully..<br>";
							
							$filePath = realpath($target_file);
							$file = $_FILES["fileUpload"]["name"];

							$quryIns = "INSERT INTO FileData (path, name) VALUES ('$filePath', '$file')";
							$res = $conn->query($quryIns);
							$conn->close();
							
							echo "Inserted...<br>";


	}else{
		echo "<br> err uploading...";
	}

}

?>