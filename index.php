<?php

session_start();

if ((isset($_SESSION['zalogowany'])) &&($_SESSION['zalogowany']==true))
{
  header('Location: gra.php');
  exit();
}
?>

<!Doctype HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
<title>Gra przeglądarkowa</title>
</head>

<body>
Every great moment in our history began with a dream. Each bold leap forward was achieved by those willing to do anything to attain it. <br /> <br />
We are, all of us, leaving behind families, homes, the very birthplace of our species. Some for discovery, to see the unknown.<br /> <br />
Others, for a new start. But today, whatever our reasons, we take the first steps toward a new future for humanity. <br /> <br />
Today, we begin to make our dream reality. - Alec Ryder pathfinder from the Initiative <br /> <br />

<form action="logowanie.php" method="post">

 Login: <br /> <input type="text" name="Login" /> <br />
 Hasło: <br /> <input type="password" name="Hasło" /> <br />
  <input type="submit" value="Zaloguj się" />
  <input type="reset" value="Zresetuj dane" />
  
</form>

<?php
if(isset($_SESSION['blad']))  echo $_SESSION['blad'];
?>
</body>
</html>