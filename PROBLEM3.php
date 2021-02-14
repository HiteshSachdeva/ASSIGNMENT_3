<?php
include('config.php');
?>

<?php
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];

        $sql = "INSERT INTO `users` (`ID`, `USERNAME`, `EMAIL`, `GENDER`, `CITY`) VALUES ('$id', '$username', '$email', '$gender', '$city')";
        mysqli_query($conn, $sql);
    }
    else
    {
        echo "please click on the submit button to submit your data";
    }
?>
<html>
    <head>
        <title> WEB ASSIGNMENT </title>
    </head>
    <body>
        <form method = "POST" action = "add.php">
            ID <input type = "text" name = "id" placeholder = "type your id" required><br>
            USERNAME <input type = "text" name ="username" placeholder="type your username" required><br>
            E-MAIL <input type = "text" name ="email" placeholder="type your e-mail" required><br>
            GENDER <br>
                    MALE <input type = "radio"  name = "gender" value = "male" checked>
                    FEMALE<input type = "radio" name = "gender" value = "female" checked><br>
            CITY        <select name="city">
                        <option value = "dehradun" dehradun>DEHRADUN</option> 
                        <option value = "roorkee"  roorkee>ROORKEE</option>  
                        <option value = "agra"     agra>AGRA</option>     
                        </select><br>
            <input type = "submit" name ="submit" value = "click here to submit">    
        </form>
    </body>
</html>