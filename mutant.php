 <!--
Design by Bryant Smith
http://www.bryantsmith.com
email: templates [-at-] bryantsmith [-dot-] com
Released under Creative Commons Attribution 2.5 Generic.  In other words, do with it what you please; but please leave the link if you'd be so kind :)

Name       : Space Race
Version    : 1.0
Released   : 2009-08-24
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Mutant Registration Service</title>
</head>

<body>
 
    <div id="wrap">
		<div class="pagewrapper">
			<div class="innerpagewrapper">
				<div class="page">
					<div class="content"> 
       					
            	<h1>Register new Mutants</h1>
            <form method = "post" action = "mutant2.php">
					<table>
					<tr><td>Birth Name</td><td><input type="text" id="BirthName" name="BirthName" /></td></tr>
					<tr><td>CodeName</td><td><input type="text" id="CodeName" name="CodeName" /></td></tr>
					<tr><td>Level</td><td><input type="number" id = "Level" name = "Level"/></td></tr>
					<select name = "Power">
					<option>Telepathy</option>
					<option>Energy Attack</option>
					<option>Personal Fortification</option>
					<option>Intelligence</option>
					<option>Cold</option>
					<option>Fire</option>
					<option>Personal Regeneration</option>
					<option>Associated Regeneration</option>
					<option>Power Adoption</option>
					<option>Speed</option>
					<option>Technology Interface</option>
					<option>Telekenisis</option>
					<option>Flight</option>
					<option>Other</option>
					<option>Unknown</option>
					</select></td></tr>
					<select name = "PowerTwo">
					<option>Telepathy</option>
					<option>Energy Attack</option>
					<option>Personal Fortification</option>
					<option>Intelligence</option>
					<option>Cold</option>
					<option>Fire</option>
					<option>Personal Regeneration</option>
					<option>Associated Regeneration</option>
					<option>Power Adoption</option>
					<option>Speed</option>
					<option>Technology Interface</option>
					<option>Telekenisis</option>
					<option>Flight</option>
					<option>Other</option>
					<option>Unknown</option>
					<option>None</option>
					</select></td></tr></br>
					<tr><td>Power Other</td><td><input type="text" id="PowerOther" name="PowerOther" /></td></tr>
					<tr><td>First Association</td><td><input type="text" id="FstAssc" name="FstAssoc" /></td></tr>
					<tr><td>Second Association</td><td><input type="text" id="ScdAssoc" name="ScdAssoc" /></td></tr>
					<tr><td>Home Address</td><td><input type="text" id="Address" name="Address" /></td></tr>
					</table>
					<!-- END CONTENT -->
					<input type = "submit" value = "Submit"/>
					</form>
				</div>
				</div>
				</div>
        </div>
    </div>
        
</body>
</html>
