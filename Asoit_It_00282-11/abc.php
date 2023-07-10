<?php
 if(isset($_POST["submit"]))
 {

    if(isset($_POST["no1"]) && isset($_POST["no2"])){
        $no1 = $_POST["no1"];
        $no2 = $_POST["no2"];
        $res = $no1 + $no2;
    }
 }
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
                <label for="fname" >First : </label>
                <input type="text" name="no1"><hr></hr>
                <label for="fid" >Second :</label>
                <input type="number" name="no2"><hr></hr>
                <button type="submit" name="submit">submit1</button><hr></hr>
                <label for="pass">ans :</label>
                <input type="number" name="res" value="<?php if(isset($res)){echo $res; }?>"><hr></hr>
        </form>
    </div>
</body>
</html>