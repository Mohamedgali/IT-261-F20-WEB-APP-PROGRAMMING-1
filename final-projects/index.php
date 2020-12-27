<?php

session_start();

if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}
//
include('config.php');
include('includes/header.php');
?>
<!-- -->


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



<div class="home-content">
    <h1 class="<?php echo $center; ?>"><?php echo $mainHeadline;?></h1>
    <?php 
    echo randImages($photos);
    ?>
    <blockquote>
    If you're looking for the best things to do in Seattle, look no farther than our list of the top Seattle attractions you should definitely visit this year. Home to world-renowned museums, exquisite parks and a vibrant underground culture (both literally and figuratively), the Emerald City is one of the most fun-filled towns to explore, whether dealing with lifelong residents or first-time tourists. Don’t let the usual rain scare you away: There are plenty free things to do and bars to drink in no matter the weather. Check out this guide to the best Seattle attractions, but be warned, tourists might want to extend their trip.
    
    </blockquote>
    
 </div> 
<?php
include('includes/footer.php');
?>
