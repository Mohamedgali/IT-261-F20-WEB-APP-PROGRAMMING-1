<?php
// people view page
include('config.php');  // connect to the db

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location:people.php');
}

$sql = 'SELECT * FROM People WHERE PeopleID = '.$id.'';


// connect to the db
$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die( myerror(__FILE__, __LINE__,mysqli_connect_error()));
    //  extract the data here

$result = mysqli_query($iConn, $sql) or die( myerror(__FILE__, __LINE__, mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0 ){
    
 while( $row = msqli_fetch_assoc($result)) {
        $FirstName = stripslashes($row['FirstName']);
        $LastName = stripslashes($row['LastName']);
        $Occupation = stripslashes($row['Occupation']);
        $Email = stripslashes($row['Email']);
        $BirthDate = stripslashes($row['BirthDate']);
        $Description = stripslashes($row['Description']);
        $Feedback = '';
 }

} else {
        $feedback = 'Sorry, no candidates - they are partying';
    }

include('includes/header.php');?>

<main>

<h2>Welcome to <?php echo $FirstName;?>'s Page </h2>
    
<?php 
if($feedback == ''){
    echo '<ul>';
    echo '<li><b>First Name:</b>'.$firstName.' </li>';
    echo '<li><b>Last Name:</b>'.$lastName.' </li>';
    echo '<li><b>Ocuppation:</b>'.$Occupation.' </li>';
    echo '<li><b>Email:</b>'.$Email.' </li>';
    echo '<li><b>Birthdate:</b>'.$BirthDate.' </li>';

    echo '</ul>';
    echo '<p>'.$Description.'</p>';
    echo '<p><a href="people.php">Go back to people page! </p>';
} else {
  echo $feedback;
  
}//end else

?>
</main>

<aside>
<?php 
    if($feedback == '') {
            echo '<img src="uploads/people'.$id.'.jpg" alt="'.$FirstName.' '.$LastName.'" />';

        } else {
            echo $feedback;
            // echo '<p><a href="people.php">Go back to the people page!</a></p>';
        } 


        @mysqli_free_result($result);  // release web server
    
        @mysqli_close($iConn);  // close connection
    
    ?>

</aside>

<?php 
include('includes/footer.php');

    
    
    
    
    
    
    
    
    
    
    
