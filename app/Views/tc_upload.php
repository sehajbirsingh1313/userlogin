<?php
      $localhost = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "awt";

      $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
      if (isset($_POST["submit"])){
            $title = $_POST["title"];

            $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

            $tname = $_FILES["files"]["tmp_name"];

            $uploads_dir = "/images";
 
            move_uploaded_file($tname, $uploads_dir."/".$pname);

            $sql = "INSERT into tc_upload(title, image) VALUES ('$title','$pname')";

            if(mysqli_query($conn, $sql)){
                echo "File successfully uploaded";
            }else{
                echo "Error";
            }
      }
?>

<?php
if (isset($_POST["submit"])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['name'];

    $fileExt = explode(".",$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".">$fileActualExt;
            }
        }
    }else{
        echo "You cannot upload file of this type!";
    }
}

