<?php
header( "refresh:5;url=index.html" );

/* Functions we used */
function escapeData($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}

if (isset($_POST['submit'])) {

  $to = "dev.chateau@gmail.com";
  $beta = escapeData($_POST['beta']);
  $subject = "landingPage" . " " . $beta;
  $from = escapeData($_POST['email']);
  $firstName = escapeData($_POST['firstName']);
  $lastName = escapeData($_POST['lastName']);
  $message = escapeData($_POST['message']);

  $messageToSend =
  "De: " . $lastName . " " . $firstName . "\n" .
  "From: " . $from . "\n\n" .
  "Message: " . $message . "\n\n" .
  "Intéressé par la bêta " . $beta;

  /* Send the message using mail() function */
  if (mail($to, $subject, $messageToSend) == TRUE) {
      echo "<p class='state-mail text-center'>Votre message a bien été envoyé</p>";
  }
  else {
echo "<p class='state-mail text-center'>Il y a eu un problème lors de l'envoie de votre message\n. Veuillez
réessayer s'il vous plaît</p>";
  }

  echo "<p class='text-center'>Vous serez redirigés sur la page home dans 5 secondes</p>";

}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <title>LocsApp</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" type="text/css">
  <link rel="stylesheet" href="Skeleton-2.0.4/css/normalize.css" type="text/css">
  <link rel="stylesheet" href="Skeleton-2.0.4/css/skeleton.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/responsive.css" type="text/css">


</head>

<body>
  <header>

  <div id="nav" class="twelve columns">
  <ul>
  <li><img src="img/logo_colorful_500px.png"></li>
    <li><a href="index.php#section-summary">Accueil</a></li>
    <li><a href="index.php#section-team">L'équipe</a></li>
    <li><a href="index.php#section-form">Inscription Bêtas</a></li>
  </ul>
  </div>

  </header>
</body>
</html>
