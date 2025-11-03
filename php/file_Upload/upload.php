<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload using PHP Procedural Coding</h3>
    <?php 
    if(isset($_POST['upload'])){
        echo "<pre>";
        $filename = $_FILES['myfile'] ['name'];
        $destination = "files/" . $filename;
        $tempfile = $_FILES['myfile'] ['tmp_name'];
        $fileSize = $_FILES['myfile'] ['size']; //byte
        $maxsize = 576; //1mb //1048576


        $ext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $allowedTypes = ["jpg","jpeg","png"];

        $errors = [];

        if ($fileSize > $maxsize){
               $errors[] = "File is too long";


        }
        if(!in_array($ext, $allowedTypes)){

            $errors[] = "jpg,jpeg,png is allowed";
        }

        if(count ($errors)>0){
                foreach($errors as $error){
                    echo $error . "<br>";

                }
        }else {

        
             move_uploaded_file($tempfile, $destination);
             echo "<h1>Upload Successfully </h1>";

        } 
                            
    }
    
    
    ?>
    <form action="" name="myform" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile"> <br>
    <input type="submit" value="UPLOAD" name="upload">
    </form>
</body>
</html>
