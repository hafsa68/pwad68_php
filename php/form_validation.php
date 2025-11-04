<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      table,td{
        border: 1px solid #000;
        border-collapse: collapse;
      }
    </style>
</head>
<body>




    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      Your Name:
    <input type="text" name="fname"> <br> <br> <br>
    email Address:
    <input type="text" name="email"> <br> <br> <br>
    Favorite programming Language:
    <select name="language[]" multiple="multiple">
    <option value="C#">C#</option>
    <option value="Java">JAVA</option>
    <option value="perl">Perl</option>
    <option value="PHP">PHP</option>

    </select> <br> <br><br>
    Want to lern skills:
    <input type="checkbox" name="skills[]" value="C">C
    <input type="checkbox" name="skills[]" value="MySquel">MySquel
    <input type="checkbox" name="skills[]" value="Jquery">Jquery <br> <br> <br>
    <input type="submit" value="SUBMIT" name="submit">



    </form>

    <?php
if(isset($_POST["submit"])){
$name = $_POST['fname'];
$email = $_POST['email'];
$lang = $_POST['language'];  //array
$skills = $_POST['skills']; //array


$lang_output = "";
$skills_output = "";

foreach($lang as $lan){
$lang_output .= $lan . ",";
}
$lastskill = array_key_last($skills);  //last comma bad

foreach($skills as $key => $skill){
  if($key == $lastskill){
$skills_output .= $skill ;

  }else{

$skills_output .= $skill . ",";
  }

}



?>

<table>

<tr>
  <td>Name:</td>
  <td><?php echo $name;?></td>
</tr>
<tr>
  <td>Email:</td>
  <td><?php echo $email;?></td>
</tr>
<tr>
  <td>Languages:</td>
  <td><?php echo $lang_output;?></td>
</tr>
<tr>
  <td>Skills:</td>
  <td><?php echo $skills_output;?></td>
</tr>
</table>



<!-- //   echo "<pre>";
// print_r($_POST);

// echo "Skills";
// print_r($_POST ['language']);
// echo "Skills";
// print_r($_POST['skills']); -->
<?php

}
?>


</body>
</html>