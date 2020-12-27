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

include('config.php');
include('includes/header.php');
//we are going to connect to the database
?>


<?php
//Notification message
if(isset($_SESSION['success'])) :?>
<div class="error success">
<h3>
    <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    ?> 
    </h3>

</div>
<?php endif ?>

<main>
    <h1 class="not-home"><?php echo $mainHeadline; ?></h1>
    <img src="images/oscar.jpg" alt="Oscae Winers">
    <p>As recognizable as any Hollywood celebrity, the golden Oscar statuette has been around since the first Academy Awards ceremony in 1929. The iconic trophy depicts a knight holding a sword and standing on a film reel with five spokes, each representing one of the Academy of Motion Picture Arts and Sciences’ five original branches: actors, directors, producers, technicians and writers. Although formally known as the Academy Award of Merit, the statuette, which stands 13.5 inches high and weighs 8.5 pounds, was officially nicknamed Oscar in 1939. It’s uncertain exactly where the nickname came from, although credit often is given to Academy librarian Margaret Herrick, who upon first seeing the statuette reportedly claimed it looked like her uncle Oscar.</p>
    

</main>






    
<aside>
    <h3 class="Actor-page">OSCARS WINNERS INFORMATION </h3>

    <?php
    
$sql = 'SELECT * FROM Actor';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die( myerror(__FILE__, __LINE__, mysqli_connect_error()) );
//we extract the data here


$result = mysqli_query($iConn, $sql) or die(myerror(__FILE__,__LINE__, mysqli_error($iConn)));

if( mysqli_num_rows($result) > 0 ) { //showing the records 
    
while( $row = mysqli_fetch_assoc($result)){
        //this array wull display the contents or your row

echo '<ul>';            //use a similar a href's value that we used for out switch assigment 
 echo '<li class="bold">OSCARS WINNER <a href="actor-view.php?id='.$row['ActorID'].'">'.$row['FirstName'].'</a></li>';
    //echo '<li>'.$row['FirstName'].' '.$row['LastName'].'</li>';
   // echo '<li>'.$row['Occupation'].'</li>';
    echo '</ul>';
}//close while
} else {
       echo 'Nobody at home!';
    }//else end 


    //realease the web server

    @mysqli_free_result($result);

    //close the connection

    @mysqli_close($iConn);
    ?>

</aside>

<?php include('includes/footer');?>








