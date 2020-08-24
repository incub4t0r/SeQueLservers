<!DOCTYPE html>
<html>
    <link href="./css/htmlstyles.css" rel="stylesheet">
    <body>
        <div class="rounded">
       	    <h1>Welcome to SeQueL Servers!</h1> </br></br>
	        <form action="action.php" method="POST">
                <label>User ID:</label>
                    <input type="text" name="uid" placeholder="Enter Username" required></br>
                <label>Password:</label>
                    <input type="password" name="pid" placeholder="Enter Password" required></br></br>
                <input type="submit" value="Submit" /> 
                <!-- TODO: Fix the login script to prevent users from appending // to the end of usernames to bypass password checks-->
            </form>
        </div>
    </body>
</html>
