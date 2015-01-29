<?php

/*
Our "config.inc.php" file connects to database every time we include or require
it within a php script.  Since we want this script to add a new user to our db,
we will be talking with our database, and therefore,
let's require the connection to happen:
*/
require("db_connect.php");

//if posted data is not empty
if (!empty($_POST)) {
    //If the username or password is empty when the user submits
    //the form, the page will die.
    //Using die isn't a very good practice, you may want to look into
    //displaying an error message within the form instead.  
    //We could also do front-end form validation from within our Android App,
    //but it is good to have a have the back-end code do a double check.
   if (empty($_POST['USER']) 
    || empty($_POST['PASS']) 
    || empty($_POST['NUMB']) 
    || empty($_POST['FNAME'])
   //    || empty($_POST['FNAME']) 
       || empty($_POST['ORG'])){
        
        
        // Create some data that will be the JSON response 
        $response["success"] = 0;
        $response["message"] = "Please Enter missing values.";
        
        //die will kill the page and not execute any code below, it will also
        //display the parameter... in this case the JSON data our Android
        //app will parse
        die(json_encode($response));
    }
    
    //if the page hasn't died, we will check with our database to see if there is
    //already a user with the username specificed in the form.  ":user" is just
    //a blank variable that we will change before we execute the query.  We
    //do it this way to increase security, and defend against sql injections
    //$query        = " SELECT 1 FROM users WHERE username = :user";
    //now lets update what :user should be
    //$query_params = array(
    //    ':user' => $_POST['username']
    //);
    
    //Now let's make run the query:
    //try {
        // These two statements run the query against your database table. 
        //$stmt   = $db->prepare($query);
        //$result = $stmt->execute($query_params);
    //}
    //catch (PDOException $ex) {
        // For testing, you could use a die and message. 
        //die("Failed to run query: " . $ex->getMessage());
        
        //or just use this use this one to product JSON data:
        //$response["success"] = 0;
        //$response["message"] = "Database Error1. Please Try Again!";
        //die(json_encode($response));
    //}
    
    //fetch is an array of returned data.  If any data is returned,
    //we know that the username is already in use, so we murder our
    //page
    //$row = $stmt->fetch();
    //if ($row) {
        // For testing, you could use a die and message. 
        //die("This username is already in use");
        
        //You could comment out the above die and use this one:
        //$response["success"] = 0;
        //$response["message"] = "I'm sorry, this username is already in use";
        //die(json_encode($response));
    //}
    
    //If we have made it here without dying, then we are in the clear to 
    //create a new user.  Let's setup our new query to create a user.  
    //Again, tt sql injects, user tokens such as :user and :passme
    $query = "INSERT INTO requests (username, password, name, mobilenum, organization) VALUES 
    ( :user, :pass, :fname, :numb, :org) ";
    
    //Again, we need to update our tokens with the actual data:
    $query_params = array(
        ':user' => $_POST['USER'],
        ':pass' => $_POST['PASS'],
        ':numb' => $_POST['NUMB'],
        ':fname' => $_POST['FNAME'],
      //  ':fname' => $_POST['FNAME'],
        ':org' => $_POST['ORG'],
        
    );
    
    //time to run our query, and create the user
    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        // For testing, you could use a die and message. 
        //die("Failed to run query: " . $ex->getMessage());
        
        //or just use this use this one:

        $response["success"] = 0;
        $response["message"] = "Database Error2. Please Try Again!";
        $response["error"] = $ex;
        die(json_encode($response));
    }
    
    //If we have made it this far without dying, we have successfully added
    //a new user to our database.  We could do a few things here, such as 
    //redirect to the login page.  Instead we are going to echo out some
    //json data that will be read by the Android application, which will login
    //the user (or redirect to a different activity, I'm not sure yet..)
    $response["success"] = 1;
    $response["message"] = "Registration Successful!";
    echo json_encode($response);
    
    //for a php webservice you could do a simple redirect and die.
    //header("Location: login.php"); 
    //die("Redirecting to login.php");
    
    
} else 
    {
    ?>
	<h1>Registration</h1> 
	<form action="Add_temp_data.php" method="post"> 
	    USERNAME:<br /> 
	    <input type="text" name="USER" value="" /> 
	    <br /><br /> 
	    PASSWORD <br /> 
	    <input type="text" name="PASS" value="" /> 
	    <br /><br /> 
        CONTACT:<br /> 
        <input type="text" name="NUMB" value="" /> 
        <br /><br /> 
        FULL NAME:<br /> 
        <input type="text" name="FNAME" value=""/> 
        <br /><br /> 
        ORGANIZATION:<br/>
	    <input type="text" name="ORG" value=""/> 
        <br /><br /> 
       
        <input type="submit" name="SUBMIT" value="Register"/> 
	</form>
    <?php
    }
    ?>