<?php

ob_start();
define('DEBUG', 'TRUE');

include('credentials.php');

define( 'THIS_PAGE', basename($_SERVER['PHP_SELF']) );  // the page that i'm on is the page that i'm on


// GALLERY ----------

$Actor['WILL_SMITH'] = 'actor';  // lowercase 'trump' is use to manipulate substr/str_replace for the image
$Actor['Matt_Damon'] = 'actor';
$Actor['EMMA_STONE'] = 'actor';
$Actor['NICOLAS_CAGE'] = 'actor';
$Actor['CHARLIZE_THERON'] = ' actor';
$Actor['JOHNNY_DEPP'] = 'actor';
$Actor['SCARLETT_JOHANSSON'] = ' actor';
$Actor['GEORGE_CLOONEY'] = ' actor';
$Actor['BRAD PITT'] = 'actor';
$Actor['AMY_POEHLER'] = 'actor';




switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Welcome to City of Seattle';
        $mainHeadline = 'Welcome to City of Seattle';
        $center = 'center';
        $body = 'home';
    break;

    case 'about.php' :
        $title = 'About page for our new website';
        $mainHeadline = 'Welcome to Our wonderful About Page';
        $center = 'center';
        $body = 'about inner';
    break;

    case 'citys.php' :
        $title = 'Citys? | Reasons Why You Should Move to a Big City';
        $mainHeadline = 'Reasons Why You Should Move to a Big City';
        //$center = 'center';
        $body = 'citys inner';

        break;
   // case 'daily.php' :
       // $title = 'Daily page';
       // $mainHeadline = 'Welcome to the Daily Page';
       // $center = 'center';
       // $body = 'daily inner';
   // break;

    case 'actor.php' :
        $title = 'Welcome To Oscar Winners';
        $mainHeadline = 'Welcome To Oscar Winners!';
        $center = 'center';
        $body = 'actor inner';
    break;

    case 'contact.php' :
        $title = 'Contact us today';
        $mainHeadline = 'Welcome to Our Contact Page';
        // $center = 'center';
        $body = 'contact inner';
    break;

    case 'thx.php' :
        $title = 'Thank you!';
        $mainHeadline = 'Thank you!';
        // $center = 'center';
        $body = 'contact inner';
    break;

    case 'gallery.php' :
        $title = 'Check out our gallery';
        $mainHeadline = 'Welcome to the Actors Gallery Page';
        // $center = 'center';
        $body = 'gallery inner';
    break;


    case 'gallerry.php' :
        $title = 'Check out our gallery';
        $mainHeadline = 'Welcome to the Actors Gallery Page';
        // $center = 'center';
        $body = 'gallery inner';
    break;

}  // end switch

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['citys.php'] = 'Citys';
$nav['actor.php'] = 'Oscars';
$nav['contact.php'] = 'Contact';
//$nav['gallery.php'] = 'Gallery';

function makeLinks($n) {

    $myReturn = '';

    foreach($n as $key => $value) {  // if this page is the __ page, and we're on the __ page, do this 
        if(THIS_PAGE == $key) {  // (add class="active")
            $myReturn .= '<li><a href="' .$key. '" class="active">' .$value. '</a></li>';
        } else {  // link without class="active"
            $myReturn .= '<li><a href="' .$key. '">' .$value. '</a></li>';
        }  // end else

    }  // end foreach

    return $myReturn;

}  // end function makeLinks


$photos[] = 'photo1';
$photos[] = 'photo2';
$photos[] = 'photo3';
$photos[] = 'photo4';
$photos[] = 'photo5';

function randImages($photos) {
    $i = rand( 0, count($photos)-1 );
    $selectedImages = 'images/'.$photos[$i].'.jpg';
    $alt = ''.$p[$i].'';
    echo '<img src="'.$selectedImages.'" alt="'.$alt.'" />';
}


$candidates[] = 'will';
$candidates[] = 'biden';
$candidates[] = 'clint';
$candidates[] = 'sande';
$candidates[] = 'warre';
$candidates[] = 'harri';
$candidates[] = 'booke';
$candidates[] = 'ayang';
$candidates[] = 'butti';
$candidates[] = 'klobu';
$candidates[] = 'castr';

function randImages2($candidates) {
    $i = rand( 0, count($candidates)-1 );
    $selectedImages = 'images/'.$candidates[$i].'.jpg';
    $alt = ''.$candidates[$i].'';
    echo '<img src="'.$selectedImages.'" alt="'.$alt.'" />';
}






$actor['WILL_SMITH'] = 'will_Acted in Bad Boys.';
$actor['Matt_Damon'] = 'matt_Acted in BRING HIM HOME .';
$actor['EMMA_STONE'] = 'emma_Acted in easy.';
$actor['NICOLAS_CAGE'] = 'nico_Acted in FACE OFF.';
$actor['CHARLIZE_THERON'] = 'char_Acted in THE ASTRONAUTS WIFE.';
$actor['JOHNNY_DEPP'] = 'john_Acted in Hill.';
$actor['SCARLETT_JOHANSSON'] = 'scar_Acted in Lost In Translation.';
$actor['GEORGE_CLOONEY'] = 'geor_Acted in THE IDES OF MARCH.';
$actor['BRAD PITT'] = 'brad_Acted in FIGHT CLUB.';
$actor['AMY_POEHLER'] = 'ammy_Acted in BABY MAMA.';



function randImages3($actor) {
    $i = rand( 0, count($actor)-1 );
    $selectedImages = 'images/'.$actor[$i].'.jpg';
    $alt = ''.$actor[$i].'';
    echo '<img src="'.$selectedImages.'" alt="'.$i.'" />';
}



// FORM

$firstName = '';
$lastName = '';
$email = '';
$tel = '';
$returnCust = '';
$albums = '';
$comments = '';
$privacy = '';
    // because code is moved, must now initialize vars

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$telErr = '';
$returnCustErr = '';
$albumsErr = '';
$commentsErr = '';
$privacyErr = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {  // IF server has a request method of post, do the following

    // IF name is empty, create var $nameErr and say, "please fill out your name" and assign to var
    // if NOT empty, $name = $_POST['name']

    // delcare errors - if field is empty, do something
    // a lot of IF statements - if all IF statements are true, then yay

    if( empty($_POST['firstName']) ) {  // always declare emptys at the top
        $firstNameErr = 'Please fill out your first name.';
    } else {
        $firstName = $_POST['firstName'];  // IF empty, display error, else assn the post name to var $name
    }

    if( empty($_POST['lastName']) ) {
        $lastNameErr = 'Please fill out your last name.';
    } else {
        $lastName = $_POST['lastName'];
    }

    if( empty($_POST['email']) ) {
        $emailErr = 'Please fill out your email.';
    } else {
        $email = $_POST['email'];
    }

    if( empty($_POST['returnCust']) ) {
        $returnCustErr = 'Please select one.';
    } else {
        $returnCust = $_POST['returnCust'];
    }

    if($returnCust == 'yes') {
        $yes = 'checked';
    } elseif($returnCust == 'no') {
        $no = 'checked';
    }

    if( empty($_POST['albums']) ) {
        $albumsErr = 'You forgot to select an album...';
    } else {
        $albums = $_POST['albums'];
    }

    if( empty($_POST['comments']) ) {
        $commentsErr = "Don't forget to leave a comment!";
    } else {
        $comments = $_POST['comments'];
    }

    if( empty($_POST['privacy']) ) {
        $privacyErr = 'Please agree to our privacy policy.';
    } else {
        $privacy = $_POST['privacy'];
    }


    if( empty($_POST['tel']) ) {  // if empty, type in your number
        $telErr = 'Please input your phone number.';
    } elseif( array_key_exists('tel', $_POST) ) {
        if( !preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']) ) {  // if not typing in xxx-xxx-xxx, display invalid format
            $telErr = 'Invalid format!';
        } else {
            $tel = $_POST['tel'];
        }
    }
    

    // if user checks the checkboxes, all of them, we want to know
    // implode the array

    function favAlbums() {
        $myReturn = '';

        if( !empty($_POST['albums']) ) {  // if it's not empty, take contents of array wines
            $myReturn = implode(', ', $_POST['albums']);
        }

        return $myReturn;

    } // end myWines



    if( isset(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['tel'],
        $_POST['returnCust'],
        $_POST['albums'],
        $_POST['comments'],
        $_POST['privacy']) ) {

            $to = 'szemeo@mystudentswa.com';
            $subject = 'test email on ' . date('m/d/y');
            $body = ''.$firstName. ' ' .$lastName. ' has filled out your form.' .PHP_EOL.'';
            $body .= 'Email: ' .$email. '' .PHP_EOL.'';
            $body .= 'Phone: ' .$tel. '' .PHP_EOL.'';
            $body .= 'Returning customer? ' .$returnCust. '' .PHP_EOL.'';
            $body .= 'Favorite city: ' .favAlbums(). '' .PHP_EOL.'';
            $body .= 'Why? ' .$comments. '' .PHP_EOL.'';

            $headers = array(
                'From' => 'no-reply@mohamedgali.com',  // obfuscate self mail
                'Reply-to' => ''.$email.''  // info to reply to sender
            );

            mail($to, $subject, $body, $headers);
                header('Location: thx.php');
                
        } // end isset

} // close server request method

// THIS IS PLACED AT THE VERY BOTTOM OF CONFIG FILE
function myerror($myFile, $myLine, $errorMsg){
     if (defined('DEBUG') && DEBUG){
     echo 'Error in file: <b>'.$myFile.' </b> on the line <b>'.$myLine.'</b>';
     echo 'Error messege: <b>'.$errorMsg.' </b>';
     die();
    }else{
        echo ' Houston we have a problem';
        die();
    }
 }






?>

