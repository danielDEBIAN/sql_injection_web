<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SQL Injection</title>
        <meta name="description" content="">
    </head>
    <body style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <?php
                    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'loginweb');
                    $uid = $_POST['uid'];
                    $pid = $_POST['passid'];
                    $SQL = "SELECT * FROM user_details WHERE userid = '$uid' AND password = '$pid' ";
                    $result = $mysqli->query($SQL);
                    if($result->num_rows>0){
                        echo "<h4>"."-- Personal Information -- "."</h4>","</br>";
                        while ($row=$result->fetch_array()){
                            echo "<p>"."User ID : ".$row[0]."</p>";
                            echo "<p>"."Password : ".$row[1]."</p>";
                            echo "<p>"."First Name : ".$row[2]." Last Name : ".$row[3]."</p>";
                            echo "<p>"."Gender : ".$row[4];
                            echo "<p>"."Country : ".$row[5];
                            echo "<p>"."Email ID : ".$row[6]."</p>";
                            echo "--------------------------------------------";
                        }
                    }else{
                        echo "Invalid user id or password";
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>

