<?php

session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

// Actors view page
include('config.php');  // connect to the db
?>


<?php 
// notification message

if(isset($_SESSION['success'])) : ?>
<div class="error success">
    <h3><?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?></h3>
</div>

<?php endif ?>
    
<?


if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location:actor-view.php');
}

$sql = 'SELECT * FROM Actor WHERE ActorID = '.$id.'';


// connect to the db
$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die( myerror(__FILE__, __LINE__,mysqli_connect_error()));
    //  extract the data here

$result = mysqli_query($iConn, $sql) or die( myerror(__FILE__, __LINE__, mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0 ){
    
 while( $row = mysqli_fetch_assoc($result)) {
        $FirstName = stripslashes($row['FirstName']);
        $LastName = stripslashes($row['LastName']);
        $Occupation = stripslashes($row['Occupation']);
        $BirthDate = stripslashes($row['BirthDate']);
        $Description = stripslashes($row['Description']);
        $Feedback = '';
 }

} else {
        $Feedback = 'Sorry, no actors - they are partying';
    }

include('includes/header.php');?>

<main>

<h2>Welcome to <?php echo $FirstName;?>'s Page </h2>
    
<?php 
if($Feedback == ''){
    echo '<ul>';
    echo '<li><b>First Name:</b>'.$FirstName.' </li>';
    echo '<li><b>Last Name:</b>'.$LastName.' </li>';
    echo '<li><b>Ocuppation:</b>'.$Occupation.' </li>';
    echo '<li><b>Birthdate:</b>'.$BirthDate.' </li>';
    echo '<li>'.$Description.'</li>';
    echo '<li><a href="actor.php">Go back to actor page!</a></li>';
    echo '</ul>';
} else {
  echo $Feedback;
  
}//end else

?>
</main>

<aside>
<?php 
    if($Feedback == '') {
            echo '<img src="uploads/actor'.$id.'.jpg" alt="'.$FirstName.' '.$LastName.'" />';

        } else {
            echo $Feedback;
            // echo '<p><a href="people.php">Go back to the people page!</a></p>';
        } 


        @mysqli_free_result($result);  // release web server
    
        @mysqli_close($iConn);  // close connection
    
    ?>

</aside>

<?php 

include('includes/footer.php');
?>

    
    
    
    
    
    
    
    
    
    
    
