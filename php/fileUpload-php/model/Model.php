	<?php
//include_once('config/conn.php');
//echo "imModelFile..<br>";

class Model
{

    public function __construct()
    {

    }

	
	public function funCtrlModel($ )
	{
$conn = new mysqli('localhost', 'root', 'ashish123', 'UserDB');

if($conn->connect_error)
{
  die("Connection Failed..<br>".$connect_error);
}
//echo "DataBase Connected Successfully..<br>";

		$filePath = "C://Downloads/".realpath($file);
		//echo $filePath;
		
		$quryIns = "INSERT INTO FileData (path, name) VALUES ('$filePath', '$file')";
		$res = $conn->query($quryIns);
		$conn->close();
		
		return "Inserted...<br>";
	}
	
	
}
?>
