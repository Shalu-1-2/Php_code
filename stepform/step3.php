<?php

include("db.php");
if(!isset($_REQUEST['id'])){
    header("location:step1.php");
    exit();
}
$id =$_REQUEST['id'];
$sql ="SELECT * FROM stepform WHERE  id='$id'";
$query =mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Step 3 Upload Profile and signature</h1>
    <form action="step3code.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php  echo $row['id']?>">
        profile:
        <input type="file" name="profile"/><br><br>
        Signature :
        <input type="file" name="sign"> <br><br>

        <a href="step2.php?id=<?php echo $row['id'] ?>">Previous</a>
        <button name="submit">Submit</button>
    </form>
</body>

</html>