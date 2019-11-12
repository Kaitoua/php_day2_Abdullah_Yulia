<!DOCTYPE html>
<html>
<head>
<title> PHP example</title>
</head>
<body>
	<h1>Color for Chrome: red <br> For Mozilla: blue</h1>
<?php
$viewer = getenv("HTTP_USER_AGENT");
$browser = "An unidentified browser";
if( preg_match("/MSIE/i", "$viewer"))
{ $browser ="Internet Explorer" ;
} else if(preg_match("/Netscape/i", "$viewer")
)
{ $browser =
"Netscape";
} elseif(preg_match('/Chrome/i' ,
"$viewer"))
{ $browser ='Google Chrome';
echo "You are using Chrome!<hr>";
echo "<link rel='stylesheet' type='text/css' href='chrome.css'>";

} else if(preg_match("/Mozilla/i", "$viewer"))
{ $browser ="Mozilla" ;
echo "You are using Mozilla!";
echo "<link rel='stylesheet' type='text/css' href='mozilla.css'>";
echo "<style type='mozilla.css'></style>";


} elseif(preg_match('/Safari/i',"$viewer"))
{ $browser ='Apple Safari';

} $platform =
"An unidentified OS!";
if(preg_match("/Windows/i", "$viewer"))
{ $platform ="Windows!";
} else if (
preg_match("/Linux/i", "$viewer")
)
{ $platform ="Linux!";
} else if (
preg_match("/Mac/i", "$viewer")
)
{ $platform ="Mac!";
} echo("You are using $browser on $platform");
?>

</body>
</html>