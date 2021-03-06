<?php
$version="";

$root= substr($_SERVER["DOCUMENT_ROOT"],0,-4);   // Get path
$file="$root\home\us_config\us_config.ini" ;     // Name and path of configuration file

if (file_exists($file) && is_readable($file)){   // Check file
  $settings=parse_ini_file($file,true);          // parse file into an array 
  $version=$settings["APP"]["AppVersion"];       // get parameter
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>The Uniform Server ZeroXI </title>
<meta name="Description" content="The Uniform Server Zero 11.1.16" />
<meta name="Keywords" content="The Uniform Server, MPG, Mike, Ric, UniServer, Olajide ,BobS " />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>

<div id="wrap">
  <div id="header">

     <a href="http://www.uniformserver.com"><img src="images/logo.png" align="left" alt="The Uniform Server ZeroXI" /></a>
       <div id="header_txt2" >
         <div style="position:absolute;">
           <b>ZeroXI <?php print "- ".$version; ?> </b><br />
           Apache 2.4.9 VC10 <br />
           MySQL 5.5.38 <br />
           PHP 5.2,5.3,5.4,5.5 or 5.6<br />
         </div>
       </div>
  </div>

  <div id="content">
    <h2>Welcome to The Uniform Server Zero</h2>
    <p>Welcome to The Uniform Server Zero default start splash page. This page and every other file are being served by Apache. Information can be found in folder UniServer\docs. Additional support for Zero can be found on the <a target="_1" href="http://wiki.uniformserver.com/">Wiki</a>.</p>
    <p>&nbsp;</p>
    <h2>Server Specification - Plugins</h2>
  <table>
   <tr valign="top">
   <td>
    <ul>
      <li> Apache 2.4.9 VC10 openssl-1.0.1g</li>
      <li> MySQL 5.5.38-community</li>
      <li> MySQL 5.6.19-community</li>
      <li> Mariadb 5.5.37 </li>
      <li> Mariadb 10.0.11 </li>
      <li> PHP : 5.2.17</li>
      <li> PHP : 5.3.27-5.3.28</li>
      <li> PHP : 5.4.19-5.4.29</li>
      <li> PHP : 5.5.3-5.5.13</li>
      <li> PHP : 5.6.0_beta3</li>
      <li> phpMyAdmin  4.2.2</li>
      <li> phpMyBackupPro 2.4</li>
    </ul>
   </td>
   <td>
     &nbsp;&nbsp;&nbsp;&nbsp;
   </td>
   <td>
    <ul>
      <li> Adminer  3.7.1 - 4.1.0</li>
      <li> Strawberry Perl</li>
      <li> ActivePerl via Installer</li>
      <li> APC 	- Dependent on PHP version</li>
      <li> eAccelerator - Dependent on PHP version</li>
      <li> XCache  - Dependent on PHP version</li>
      <li> Zend OpCache - Dependent on PHP version</li>
      <li> OpenSSL 1.0.1g</li>
      <li> msmtp 1.4.32 - Mail client for PHP  </li>
      <li> Cron - Scheduler</li>
      <li> DtDNS - IP address updater</li>
    </ul>
   </td>
   </tr>
  </table>
  </div>


  <div id="divider"> <a target="_1" href="http://www.uniformserver.com">The Uniform Server</a> | <a target="_1" href="http://sourceforge.net/projects/miniserver/files/">Download</a> | <a target="_1" href="http://wiki.uniformserver.com/index.php/Category:Uniform_Server_10-Zero">Wiki</a> | <a target="_1" href="http://forum.uniformserver.com">Support Forum</a> </div>

  <div id="content">
  <br>
  <p>The Uniform Server is a WAMP package that allows you to run a server on any XP,
 Vista or W7 Windows OS based computer. It is small and quick to download, and can be
 easily moved around. It also can be setup and used as a production/live server.
 Developers can use The Uniform Server to test their applications which require PHP,
 MySQL and the Apache HTTPd Server.</p>

  <p>&nbsp;</p>
  </div>

  <div id="divider">Developed By <a href="http://www.uniformserver.com/">The Uniform Server Development Team</a></div>
</div>
</div>
</body>
</html>
