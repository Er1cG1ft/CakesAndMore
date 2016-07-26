<?php
$msg="";
if(isset($_POST['submit']))
{
  $from = $_POST['email']; 
  $to = "eric.j.gift@gmail.com";
  $subject = "Message Received!";
  $name = $_POST['firstname'] . $_POST['lastname'];
  $content = $_POST['question'];
  
  foreach ($_POST['service'] as $service){
    $services .= "\t" . $service . "\n";
  }
  
  $proposal = $_POST['project'];
  $startdate = date("m-d-Y", strtotime($_POST['start']));
  $enddate = date("m-d-Y", strtotime($_POST['end']));
  
  $message1 = "A new message has been submitted! \n \n Name: " . $name . "\n Email: " . $from . "\n Message: \n \n" . $content . "\n Services: \n \n" .$services . "\n Proposal: \n \n" . $proposal . "\n Start:" . $startdate . "\n End:" . $enddate;
	
	$headers = "From: $from \r\n";
	$headers .= "Reply-To: $from \r\n";
	$headers .= "Return-Path: $from\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	
	if(mail($to,$subject,$message1,$headers)) 
	{
		$msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	}
}

?>

<!DOCTYPE html>

<html>
  <head>
    <title>Cakes &amp; More | Order</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/app-page.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans|Forum|Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="/mobile.css" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Eric Gift">
  </head>
  <body>
  <div class="leftnav">
    <img id="dets" src="/images/details.png" alt="menu" />
    <img id="stand" src="/images/cake-stand.png" alt="menu" />
    <div id="navmenu">
      <img id="close" src="/images/close-button.png" alt="close" />
      <a href="/index.html" class="fixednav" id="homenav">Home</a>
      <a href="/portfolio.html" class="fixednav">Portfolio</a>
      <a href="/order.php" class="fixednav">Order</a>
    </div>
  </div>
    <div class="order-form">
      <h3>
        ----------------------
      </h3>
      <h2>
        Order
      </h2>
      <h3 id="order-line">
        ----------------------
      </h3>
    </div>
    <div class="form">
      <form class="contactform" action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'>
        <div class="inquiry">
          <input type="text" name="name" placeholder="Name"><br>
          <input type="text" name="email" placeholder="Email"><br>
          <input type="text" name="theme" placeholder="Theme"><br>
          <input type="text" name="servings" placeholder="Number of Servings"><br>
          <label for="flavor">Flavor:</label>
          <select id="flavor" name="flavor"> 
            <option value="Chocolate">Chocolate</option>
            <option value="Vanilla">Vanilla</option>
            <option value="Red_Velvet">Red Velvet</option>
            <option value="Dyed">Dyed</option>
          </select> <br>
          <label for="date">Needed By:</label> <input type="date" name="date"> <br>
          <textarea id="question" name="question" placeholder="Description"></textarea> <br>
          <input class="submit" type="submit" name="submit" value="Submit" onclick="return confirm('Your order has been received!')">
        </div>
      </form>
    </div> 
    <div class="footer text-muted credit">
      <p>
        &copy; Cakes &amp; More, 2016 | Design by <a href="http://ericjgift.com">Eric Gift</a>
      </p>
    </div>
  </body>
</html>
