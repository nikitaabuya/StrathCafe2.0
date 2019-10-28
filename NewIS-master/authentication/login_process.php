<?php
    session_start();
    // Change this to your connection info.
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'strathcafe';

    // Try and connect using the info above.
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    // If there is an error with the connection, stop the script and display the error.
    if (mysqli_connect_errno()) 
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
        
    // Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if ( !isset($_POST['Email'], $_POST['Password']) ) 
    {
        // Could not get the data that should have been sent.
        die ('Please fill both the Email and password field!');
    }

    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($stmt = $con->prepare('SELECT * FROM Users WHERE Email = ?')) 
    {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['Email']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();

        if ($stmt->num_rows > 0) 
        {
            $stmt->bind_result($UserID, $FirstName, $LastName, $AdmissionNumber, $Gender, $Email, $Password, $DateJoined);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if ($_POST['Password'] === $Password) 
            {
                // Verification success! User has loggedin!
                // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['FirstName'] = $FirstName;
                $_SESSION['LastName'] = $LastName;
                $_SESSION['AdmissionNumber'] = $AdmissionNumber;
                $_SESSION['Gender'] = $Gender;
                $_SESSION['Email'] = $Email;
                $_SESSION['Password'] = $Password;
                header('Location: ./../home/index.php');            
            } 
            else 
            {                
                echo '<h1>Incorrect password!</h1>';
                header( "refresh:1; url=login.html" );
            }
        } 
        else 
        {
            echo '<h1>Incorrect Email!</h1>';
            header( "refresh:1; url=login.html" );
        }
        $stmt->close();
    }
