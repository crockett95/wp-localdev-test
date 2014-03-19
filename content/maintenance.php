<?php
header("HTTP/1.1 503 Service Temporarily Unavailable");
header("Status: 503 Service Temporarily Unavailable");
header("Retry-After: 200");
?>
<html>
<head>
<title>Site upgrade in progress</title>
<meta name=”robots” content=”none” />
</head>
<body>
<h1>Maintenance Mode</h1>
<p><a title=”Your site” href=”your-site-url”>Your Site name</a> is currently undergoing scheduled maintenance.<br />
Please try back <strong>in 2 minutes</strong>.</p>
<p>Sorry for the inconvenience.</p>
</body>
</html>
<?php die(); ?>