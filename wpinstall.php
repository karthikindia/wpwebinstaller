<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>WordPress &gt; Remote Installer</title>
<link rel="stylesheet" id="combined-css" href="http://projects.karthik.sg/wpwebinstaller/style.css" type="text/css" media="all">
</head>
<body class="wp-core-ui">
<h1 id="logo"><a href="http://wordpress.org/">WordPress CMS</a></h1>

<!-- STEP 0 //-->
<h1>WP Web Installer</h1>
<p>The WP Web Installer is a script designed to streamline the installation of the WordPress Content Management System. Some users have limited experience using FTP, some webhosts do not allow files to be decompressed after being uploaded, and some people want to make their WordPress installs faster and simpler.</p>
<p>Using the WP Web Installer is simple - upload a single PHP file to your server, access it via a web-browser and simply follow the prompts through 7 easy steps, at the end of which, the Wordpress Installer will commence.</p>
<form method="post">
  <input type="hidden" name="step" value="1" />
  <input type="submit" name="submit" value="Let's Get Started!" class="button button-large" />
</form>

<div id="footer">
  <a href="https://github.com/karthikindia/wpwebinstaller" class="github">View on GitHub</a>
  Created by <a href="http://www.karthik.sg">Alagappan Karthikeyan</a><br/>
  <div class="legal">
    <strong>NOTE:</strong> This script is not an official WordPress product.<br/>
    The WordPress logo is the property of the WordPress Foundation.
  </div>
</div>

<script src="http://projects.karthik.sg/wpwebinstaller/jquery.min.js"></script>
<script src="http://projects.karthik.sg/wpwebinstaller/installer.js"></script>

</body>
</html>
