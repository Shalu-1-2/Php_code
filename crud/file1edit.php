<?php 
if(!isset($_REQUEST['id'])){
    header("location:file1show.php");
    exit();
}
$id =$_REQUEST['id'];

$conn = mysqli_connect("localhost","root","","studentcrud");

if(!$conn){
    echo "Database connection failed".mysqli_connect_error();

}

$sel = "SELECT * FROM file1 WHERE  id='$id'";

$query = mysqli_query($conn,$sel);
$data = mysqli_fetch_assoc($query);

if($query){

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>fill upload</h1>
    <form action="file1update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        Name : <input type="text" name="name" value="<?php echo $data['name'] ?>" /> <br><br>

        <img src="uploads/<?php echo $data['file'] ?>" width="300" alt=""> <br><br>
        File Upload:
        <input type="file" name="file" /> <br><br>
        <button name="update">upload</button>
    </form>
</body>

</html>