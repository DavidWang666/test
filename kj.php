<!DocTYpe HTML>
<html>
<body>
<?php
$nameErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["name"])){

 $nameErr = "Name is required";
}else{
    $name = $_POST["name"];
}
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];
}
?>
<form method ="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>";>
Name:    <input type="text" name="name" value ="<?php echo $name?>"><span class ="error"><?php echo $nameErr;?></span>
<br><br><br>
E-mail:  <input type="text" name="email" >
<br><br><br>
Website: <input type="text" name="website">
<br><br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>

<br><br><br>
<input type = "radio" name="gender" value = "man">man
<input type = "radio" name="gender" value = "woman">woman
<br>
<input type = "submit">
</form>
<?php
echo "you have enter:";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>
