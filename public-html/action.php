<?php
include 'config.php';
ini_set("display_errors", "off");

$servername = "db";
$username = "root";
$password = "root";
$dbname = "myDb";

$conn = new mysqli($servername, $username, $password, $dbname);

$uid = $_REQUEST['uid'];
$pass = $_REQUEST['pid'];

$sql = "SELECT * FROM employee WHERE userid='$uid' AND userpass='$pass'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if ($row){
    //$_SESSION["id"] = $row[0];
    $_SESSION["userid"] = $row[3];
    $_SESSION["pass"] = $row[4];
    //ob_clean();
    ?>
    <html>
    <link href="./css/htmlstyles.css" rel="stylesheet" type="text/css"/>
        <body>
            <div class="rounded">
                <h1> User logged in! 
                </h1>
                <p> TODO: Remove ssh capabilities of 67.207.91.235, the flag is still there.
                </p>
                <form action="index.php" method="POST">
                    <input type="button" value="Return to login" onclick="history.back()"/>
                </form>
            </div>
        </body>
        
    </html>
    <?
}
else{
    ?>
    <html>
    <link href="./css/htmlstyles.css" rel="stylesheet" type="text/css"/>
        <body>
            <div class="rounded">
                <h1> Username or password is invalid! 
                </h1>
                <form action="index.php" method="POST">
                    <input type="button" value="Return to login" onclick="history.back()"/>
                </form>
            </div>
        </body>
    </html>
    <?
}

