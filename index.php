<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Mobile Redirect</title>
    </head>
    <body>
	

        <h1>Mobile Redirect</h1>
        <p>This is a demo mobile redirect written in PHP.</p>
        <p>When you click each of the links below while using a mobile browser, you will be sent to the Netbiscuits mobile site at <u>http://m.netbiscuits.com </u></p>
        <p>Currently, the mobile redirect logic allows for 4 types of redirection variations which is used to support deep linking URL logic from a desktop site to a mobile site. <br>
		Of course, this logic is extensible to allow for a case such as including the requested page name.
		</p>
        <ol>
            <li><a href="preserveparams.php?test=1&test2=hello">Keep both the page folder path and querystring parameters</a> 
			
			<br>e.g. <b>Desktop: </b> http://www.hostname.com<span style="background-color:yellow">/folder1/folder2/?param1=value1&amp;param2=value2 </span> <b>redirects to </b>
			<br><b>Mobile:</b> http://m.hostname.com<span style="background-color:yellow">/folder1/folder2/?param1=value1&amp;param2=value2 </span> 
			
			</li>
            <li><a href="loseparams.php?test=1&test2=hello">Keep only the folder path and discard the querystring parameters</a> 
			<br>e.g. <b>Desktop: </b> http://www.hostname.com<span style="background-color:yellow">/folder1/folder2/ </span> <b>redirects to </b>
			<br><b>Mobile:</b> http://m.hostname.com<span style="background-color:yellow">/folder1/folder2/ </span>
			
			</li>
        
            <li><a href="preserveparams2.php?test=1&test2=hello">Keep only querystring URL parameters and discard the page folder path</a> 
			
			<br>e.g.  <b>Desktop: </b>http://www.hostname.com<span style="background-color:yellow">?param1=value1&amp;param2=value2 </span> <b>redirects to </b>
			<br> <b>Mobile:</b> http://m.hostname.com<span style="background-color:yellow">?param1=value1&amp;param2=value2 </span>
			
			</li>
            <li><a href="loseparams2.php?test=1&test2=hello">Discard anything after the requested host name and take to mobile home page</a> 
			
			<br>e.g. <b>Desktop: </b> e.g. http://m.hostname.com <b>redirects to </b>
			<br> <b>Mobile:</b> e.g. http://m.hostname.com 
			
			</li>
        </ol>       
        <p>
		<table>
		<tr><td width="100%">This can be implemented by simply including the file "mobileredirect.inc" in all of the PHP pages you would like to be redirected and also calling the function:</td></tr> 
			<tr><td style="padding-left:25px; width:100%"><b>redirectMobileUser(urlToRedirectTo, true|false, true|false) </b> </td></tr> 
				<tr><td style="padding-left:50px; width:100%"><u>urlToRedirectTo</u>			Host name to redirect to </td></tr> 
				<tr><td style="padding-left:50px; width:100%"><u>retainPagePath</u>			true|false - do|don't retain the full page path </td></tr> 
				<tr><td style="padding-left:50px; width:100%"><u>retainQueryParameters</u>	true|false - do|don't retain the URL querystring parameters </td></tr> 
				
				<tr><td style="padding-left:25px;"><br>
				<b>Example:</b><br>
				<img src="images/mobileRedirect.png" /></td></tr>
		</table>		
		</p>
       
	   <br>
	   <br>
<hr>	  
	   <b>About this demo: there are 6 code files in this demo:</b>
	   <br><b>Note:</b> <a href="mobileredirect.zip">this source code </a> is offered without warranty. <a href="mobileredirect.zip">Download ZIP file </a>
	   <ol>
			<li> mobileredirect.inc - the library that cointains the mobile redirect logic</li>
			<li> index.php - the demo home page that explains this component </li>
			<li> preserveparams.php - demo page that calls the redirect library. This call keeps both the page folder path and querystring parameters </li>
			<li> loseparams.php - demo page that calls the redirect library. This call keeps only the folder path and discard the querystring parameters </li>
			<li> preserveparams2.php - demo page that calls the redirect library. This call keeps only querystring URL parameters and discard the page folder path </li>
			<li> loseparams2.php  - demo page that calls the redirect library. This call discards anything after the requested host name and take to mobile home page </li>
	   </ol>
        
    </body>
</html>
