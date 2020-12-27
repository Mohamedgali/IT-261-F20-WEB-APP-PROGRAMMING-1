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

// We're connecting to the database

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
    
    
     <?php
    
    $coffee = '';
    $alt = '';
    $content = '';



// end random fucntion 
    
if (isset($_GET['today'])){
            $today = $_GET['today'];
        } else {
            $today = date('l');
        }

        switch($today){
            case 'Friday':
                $coffee = 'Stand in awe of the skyscrapers';
                $class = 'Independence';
                $pic = 'city1.jpg';
                $alt = 'Skyscrapers';
                $content = 'Moving to a major city is not only empowering, but liberating. Simply surviving is an accomplishment. When every day tasks become challenging, you celebrate victories that you didn’t even know were noteworthy. Sure your apartment is the size of your closet at home, but you’ve used all of Pinterest’s best tricks, and you’re paying for it. Remember how it only took 15 minutes to drive to your doctor at home? Well add delays of public transit and heavy traffic patterns, and you will find your commute pushed to 45 minutes at best. People will be blown away that you’re not on time, but not 30 minutes late. Inter-borough? Nobel Peace Prize. Arrived early? Medal of Honor.' ;
                break;
            case 'Saturday':
                $coffee = 'Give your regards to Broadway';
                $class = 'Find yourself';
                $pic = 'city2.jpg';
                $alt = 'Broadway';
                $content = 'When you’re in a major city, you’re not going to run into the same people every day unless you plan on it. That means there’s no pressure, shame, or embarrassment if make a fool of yourself. Nobody will bring up that time you tripped on your way into the Post Office. Your break up isn’t the chatter about town. You can embrace yourself fully, and leave your past where it belongs. Plus, your weirdest, quirkiest, strangest behavior won’t cause anyone to bat an eye. And if they do, who cares? You’re never going to see that person again. You can be intimate with your most eccentric self and see if it fits, at no risk. Stay weird!';
                break;
            case 'Sunday':
                $coffee = 'Get your fill of international';
                $class = 'experimental food';
                $pic = 'city3.jpg';
                $alt = 'Grow Up…Fast';
                $content = 'Nothing forces you to grow up fast quite like living in a big city. Even with so many people around, there will be moments where you feel so alone. You will make mistakes. You will feel like you’re drowning. But on the other side of all of those negative feelings is hard earned success, wisdom, and satisfaction. You made it through with nothing but yourself, your voice, and your determination. Your perspective becomes challenge-welcoming instead of fearful, which will unlock a world you didn’t know existed. You’re forced into a solution-oriented mentality faster your small-town peers, and that makes you wise beyond your years.';
                break;
            case 'Monday':
                $coffee = 'Discover different neighborhoods';
                $class = 'Opportunity';
                $pic = 'city4.jpg';
                $alt = 'Discover';
                $content = 'There’s a reason there are so many people in big cities! They’re motivated by opportunity. Everyone focuses on the competitive nature of big cities, but there are also opportunities that you never would have access to in a small town. More people, most professions, more businesses. Did you know that there are people that just focus on cutting hair? And others that are just colorists? You can explore one specific passion and attack it with a laser focus. Small towns can only offer so much. And when your have passion fueling you, your work ethic will become untouchable.';
                break;
            case 'Tuesday':
                $coffee = 'Walk along the High Line';
                $class = 'Exposure';
                $pic = 'city5.jpg';
                $alt = 'Exposure';
                $content = 'If there’s a count of “non-white people” in your town, it may be time to expose yourself to more languages, cultures, and...did I mention food? When you have Indian, Thai, Italian, Chinese, Japanese and Ethiopian food at your grasp within 5 minutes, you’ll never go hungry. In fact, if there weren’t a gym equally as close, you’d probably be thrown back to horrific nightmares of your Freshman 15. But more importantly, you’ll be in a place with access to so many different perspectives, values, religions, and ideologies. It will effortlessly expand your knowledge and understanding, and ultimately, your worldview. You’ll impress everyone at your next family reunion!';
                break;
            case 'Wednesday':
                $coffee = 'Wednesday is Snowy Day!';
                $class = 'Exposure';
                $pic = 'city6.jpg';
                $alt = 'Exposure';
                $content = 'If there’s a count of “non-white people” in your town, it may be time to expose yourself to more languages, cultures, and...did I mention food? When you have Indian, Thai, Italian, Chinese, Japanese and Ethiopian food at your grasp within 5 minutes, you’ll never go hungry. In fact, if there weren’t a gym equally as close, you’d probably be thrown back to horrific nightmares of your Freshman 15. But more importantly, you’ll be in a place with access to so many different perspectives, values, religions, and ideologies. It will effortlessly expand your knowledge and understanding, and ultimately, your worldview. You’ll impress everyone at your next family reunion!';
                break;
            case 'Thursday':
                $coffee = 'Thursday is Sunny Day!';
                $class = 'Exposure';
                $pic = 'city7.jpg';
                $alt = 'Exposure';
                $content = 'If there’s a count of “non-white people” in your town, it may be time to expose yourself to more languages, cultures, and...did I mention food? When you have Indian, Thai, Italian, Chinese, Japanese and Ethiopian food at your grasp within 5 minutes, you’ll never go hungry. In fact, if there weren’t a gym equally as close, you’d probably be thrown back to horrific nightmares of your Freshman 15. But more importantly, you’ll be in a place with access to so many different perspectives, values, religions, and ideologies. It will effortlessly expand your knowledge and understanding, and ultimately, your worldview. You’ll impress everyone at your next family reunion!';
                break;

        }
        ?>
            <main>
                
                <h2 class="city-page"><?php echo $mainHeadline; ?></h2>
                
                <h2 class="welcome"><?php echo $coffee;?></h2>

                <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
                <p class="city-text <?php echo $class ;?>"><?php echo $content; ?></p>


            </main>


            <aside>
                <h3>5 Reasons Why You Should Move to a Big City At Least Once in Your Life</h3>

                <ul>
                    <li><a href="citys.php?today=Friday">Moving to a major city is empowering</a></li>
                    <li><a href="citys.php?today=Saturday">Give your regards to Broadway</a></li>
                    <li><a href="citys.php?today=Sunday">Get your fill of international</a></li>
                    <li><a href="citys.php?today=Monday">Discover different neighborhoods</a></li>
                    <li><a href="citys.php?today=Tuesday">Walk along the High Line</a></li>
        
                </ul>


            </aside>
    

<?php
include('includes/footer.php');