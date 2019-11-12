<?php
			$viewer = getenv( "HTTP_USER_AGENT" );
			$browser = "An unidentified browser";
			
			if(preg_match('/Chrome/i' , "$viewer"))
			{
			$browser = 'Google Chrome'; 
			$css = "chrom.css";
			}
			elseif( preg_match( "/Mozilla/i", "$viewer"))
			{
			$browser = "Mozilla";
			$css = "mozilla.css";
			}
			echo("You are using $browser");
		?>
<!DOCTYPE html>
<html>
<head>
       <title>PHP example</title> 
       <link rel="stylesheet" type="text/css" href="<?php echo $css ?>"> 
</head>
<body>

</body>
</html>