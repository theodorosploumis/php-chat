<!DOCTYPE HTML>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Instant docker made message rooms - Room No <?php print gethostname(); ?></title>
<link rel="stylesheet" type="text/css" href="style.css">
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="scripts.js"></script>

</head>

<body>


<?php
// Initialize emoty variables
$nickname = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nickname"])) {
    $nickname = "user_" . date('His');
  } else {
    $nickname = test_input($_POST["nickname"]);
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
}

function test_input($data) {

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($message && $nickname) {

  $file = fopen("messages.html","a+");
  $date = date('Y-m-d H:i:s');
  $data = "<p>[" . $date . "] <b>" . $nickname . ":</b> " . $_POST['message'] . "</p>";

  fwrite($file, $data);
  fclose($file);

} elseif (error_log()) {
  print "<script>console.log('Php error: '" . error_get_last() . "</sript>";
}

?>


<div class="container-id">
  <?php print "Room No: " . gethostname(); ?>
</div>

<div id="messages"></div>

<form id="send-message-form" action="" method="post">
  <input class="nickname" name="nickname" placeholder="nickname..." value="<?php echo $nickname ?>" />
  <input class="message" name="message" placeholder="Type your message..." />
  <input id="submit" type="submit" name="submit" value="Send">
</form>

</body>
</html>
