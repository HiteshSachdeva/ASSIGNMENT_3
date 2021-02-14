<html>
    <head>
        <title>
            PHP BASIC CODE IS AS FOLLOWS
        </title>
    </head>
    <body>
        <form method="post" action="sum.php">
            VARIABLE 1 <input type="text" name="var1" required>
            VARIABLE 2 <input type="text" name="var2" required>
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    // $var1=10;
    // $var2=20;

    if(isset($_POST['submit']))
       {
           $sum = $_POST['var1'] + $_POST['var2'];
           echo "Sum of the 2 variables is $sum";
       }
    else{
        echo "no input ";
    }
?>