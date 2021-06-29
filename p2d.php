<?php
    if($_POST)
    {
        $name = $_POST['name'];
        $seat = $_POST['seat'];
        $meal = $_POST['meal']; 
    }
?>

<html>
<head>
    <title>Random</title>
</head>
<body style="background-color: black;color: yellow;">
    <center>
        <div id="main">
        <form method="post" action="p2d2.php">
    <table border="1" style="text-align:left">
        <tr>
            <th colspan="2" style="text-align:center"> Set Tour Flight Preference</th>
        </tr>
        <tr>
            <th>Name</th><th><input type="text" name="name" value=<?php echo $name?> ></th>
        </tr>
        <tr>
            <th>Seat Selection</th><th><input type="radio" name="seat" value="Middle" <?php if($seat=="Middle"){ echo "checked";}?>>Middle<input type="radio" name="seat" value="Window" <?php if($seat=="Window"){ echo "checked";}?>>Window<input type="radio" name="seat" value="Center"  <?php if($seat=="Center"){ echo "checked";}?>>Center</th>
        </tr> 
        <tr>
            <th>Meal Selection</th><th ><input type="radio" name="meal" value="Vegeterian"  <?php if($meal=="Vegeterian"){ echo "checked";}?>>Vegetarian<input type="radio" name="meal" value="Non-Vegetarian"  <?php if($meal=="Non-Vegetarian"){ echo "checked";}?>>Non Vegetarian<input type="radio" name="meal" value="Diabetic"  <?php if($meal=="Diabetic"){ echo "checked";}?>>Diabetic<input type="radio" name="meal" value="Child"  <?php if($meal=="Child"){ echo "checked";}?>>Child</th>
        </tr>       
        <tr>
            <th colspan="2" style="text-align:center"><input type="submit" name="submit" value="Submit" disabled=""></th>
        </tr> 
    </table>
<?php
date_default_timezone_set('Asia/Calcutta'); 
 
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
 
$inTwoMonths = 60 * 60  + time();
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];
echo "Your last visit was - ". $visit;
setcookie('name',$name, $inTwoMonths);
setcookie('seat',$seat, $inTwoMonths);
setcookie('food',$meal, $inTwoMonths);
}
else
echo "Cookie Has Been Set!!";
setcookie('name',$name, $inTwoMonths);
setcookie('seat',$seat, $inTwoMonths);
setcookie('food',$meal, $inTwoMonths);
?>
<p>Press <input type="submit" name="submit" value="Go">to view the contents</p>
</div>

    </form>
    </center>
</body>
</html>