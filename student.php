<!DOCTYPE html>
<html lang="en">
<head>
<title>Student's Site</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
      <!--  <ul>
          <li class="current"><a href="index.php" class="m1">Home Page</a></li>
          <li><a href="about-us.html" class="m2">About Us</a></li>
          <li><a href="articles.html" class="m3">Our Articles</a></li>
          <li><a href="contact-us.html" class="m4">Contact Us</a></li>
          <li class="last"><a href="sitemap.html" class="m5">Sitemap</a></li>
        </ul>-->
      </nav>
      
    </div>
  </header>
  <div class="container">
    <aside>
      
     <!-- <ul class="categories">
        <li><span><a href="#">Programs</a></span></li>
        <li><span><a href="#">Student Info</a></span></li>
        <li><span><a href="#">Teachers</a></span></li>
        <li><span><a href="#">Descriptions</a></span></li>
        <li><span><a href="#">Administrators</a></span></li>
        <li><span><a href="#">Basic Information</a></span></li>
        <li><span><a href="#">Vacancies</a></span></li>
        <li class="last"><span><a href="#">Calendar</a></span></li>
      </ul>-->
	  <h2>REGISTER HERE</h2>
      
<FORM action="regaction.php" onsubmit="return check();">
<TABLE>

<TR>
<TD>ADMISSION NO</TD>
</tr>
<tr>
<TD><INPUT TYPE="text" NAME="UNIVERSITY" required /></TD>
</TR>
<TR>
<TD>STUDENT NAME</TD>
</tr>
<tr>
<TD><INPUT TYPE="TEXT"NAME="NAME" required id="NAME"/></TD>
</TR>
<TR>
<TD>ADDRESS</TD>
</tr>
<tr>
<TD><TEXTAREA name="ADDRESS" required></TEXTAREA></TD>
</TR>
<TR>
<TD>PHONE NUMBER</TD>
</tr>
<tr>
<TD><INPUT TYPE="TEXT"NAME="PHNO" required id="PHNO" maxlength="10"/></TD>
</TR>
<TR>
<TD>EMAIL</TD>
</tr>
<tr>
<TD><INPUT TYPE="email"NAME="EMAIL" required /></TD>
</TR>
<TR>
<TD>GENDER</TD>
</tr>
<tr>
<TD><INPUT TYPE="RADIO"NAME="V1" value="M" required />M
       <INPUT TYPE="RADIO"NAME="V1" value="F" required />F</TD>
</TR>
<TR>
<TD>COURSE</TD>
</tr>
<tr>
<TD><SELECT NAME="COURSE" required> 
<?php
include('databasecon.php');
$db=new databasecon;
$s="select*from course";
$rs=$db->selectdata($s);
while($row=mysql_fetch_array($rs))
{
	?>
	<option value="<?php echo $row['ccode'];?>"><?php echo $row['cname'];?></option>
<?php } ?></select>
</TR>
<TR>
<TD>SEM</TD>
</tr>
<tr>
<TD><SELECT NAME="SEM" required>
<OPTION VALUE="S1">1</OPTION>
<OPTION VALUE="S2">2</OPTION>
<OPTION VALUE="S3">3</OPTION>
<OPTION VALUE="S4">4</OPTION></select>
</TR>
<tr>
<TD>
USER NAME:</td>
</tr>
<tr>
<td><INPUT TYPE="TEXT" NAME="USERNAME" required/></td>
</tr>
<tr>
<td>
PASSWORD:</td>
</tr>
<tr>
<td><INPUT TYPE="PASSWORD"NAME="PASSWORD" required /></td>
</tr>
<tr>

<td>
<INPUT TYPE="SUBMIT"value="REGISTER"/></td>
</tr>
</table>
</form>	   
    
    </aside>
    <section id="content">
      <div id="banner">
        <h2>Siena <span>Student's <span>Site</span></span></h2>
      </div>
      <div class="inside">
     
       
        <h2>Move Forward <span>With Your Education</span></h2>
        <p><span class="txt1">Eusus consequam</span> vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. </p>
        <div class="img-box"><img src="images/1page-img.jpg">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros <a href="#">maurien ulla</a> facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem quis nullamcorper nam fauctor feugiat pellent sociis.</div>
        <p class="p0">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a <a href="#">non laorem</a> lacingilla wisi.</p>
      </div>
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
<script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    function check()
    {
        if(!document.getElementById("NAME").value.match(letters))
            
        {
               
                
            alert('Please input alphabet characters only,enter  name');
            return false;
        }
       
        else if(!document.getElementById("PHNO").value.match(numbers))
        {
            alert('Please input numeric characters only,enter phone number');
            return false;
        }
        else if(document.getElementById("PHNO").value.length<10)
        {
            alert('invalid Phone number,enter phone number');
            return false;
        }
        else
        {
            return true;
        }
    }

   
</script>
	   
