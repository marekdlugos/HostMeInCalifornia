<?php $status = $_SERVER['REDIRECT_STATUS'];
    $codes = array(
        301 => array('301 - Permanently moved', 'The page has been permanently moved.'),
        403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
        404 => array('404 Not Found', 'The document/file requested was not found on this server.'),
        405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
        408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
        500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
        502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
        504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
    ); 
			
	$title = $codes[$status][0];
	$message = $codes[$status][1];
	if ($title == false || strlen($status) != 3) {
	   $message = 'Please supply a valid status code.';
	}
?>

<!DOCTYPE HTML>
<html lang="en" dir="ltr">
    
    <head>

        <!-- Hello stranger... Yep! I write clean code, enjoy it! :) -->
        
        <!-- Main informations -->
        <meta charset="UTF-8">
        <title><?php echo $title ?> | Host me in California</title>
        
        <!-- About site -->
        <meta name="description" content="Marek, 16 years old student from Slovakia (Central Europe) is looking for volunteer host family in California for the next school year." />
        <meta name="keywords" content="host family, california, USA, volunteer family, exchange student, marek dlugos" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
       
        <!-- About author and rights -->
        <meta name="author" content="Marek Dlugos" />
        <meta name="copyright" content="© 2012, Marek Dlugos. All rights reserved.">
       
        <!-- Robots -->
        <meta name="robots" content="index, follow" />

        <!-- CSS Assets -->
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="css/error.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/animate-custom.css" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300' rel='stylesheet' type='text/css'>
        
        <!-- JS Assets -->
        <!--[if lt IE 8]><script type="text/javascript">alert("Sorry, but your browser is obsolete. Please use another browser or upgrade your browser for great experience from this site :-). Thanks!");</script><![endif]-->
        <!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <!-- Open Graph Tags -->
        <meta property="og:title" content="Host me in California for the next school year..." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.hostmeinca.com/" />
        <meta property="og:image" content="http://www.hostmeinca.com/img/profile.png" />
        <meta property="og:site_name" content="Host me in California" />

        <!-- Google Analytics -->
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-37270117-1']);
          _gaq.push(['_setDomainName', 'hostmeinca.com']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>

    </head>
    <body class="error">
        <?php echo '<h1>'.$title.'</h1>'; ?>
        <p><?php echo $message ?></p>

        <ul>
            <li>check the validity of URL in address bar</li>
            <li>go back <a href="javascript:history.back()">on previous page</a></li>
            <li>go on homepage of <a href="index.html">Host me in California</a></li>
        </ul>
    </body>
</html>