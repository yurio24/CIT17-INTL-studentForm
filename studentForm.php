<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STUDENT REGISTRATION FORM</title>

	<style type="text/css">
		h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: SlateBlue; 
  border-collapse: collapse; 
  border: 2px solid navy
}
table.inner{
  border: 0px
}
	</style>
</head>
<body>
 <form action="studentForm.php" method="get">
<table align="center" cellpadding = "10">
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<select name="Birthday" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
</select>
</td>
</tr>
<tr>
<td>ID</td>
<td><input type="text" name="ID" maxlength="11" /></td>
</tr>
<tr>
<td>MOBILE NUMBER (+63)</td>
<td>
<input type="text" name="Mobile" maxlength="10" />
(10 digit number)
</td>
</tr>
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin" maxlength="6" />
(6 digit number)
</td>
</tr>
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="Philippines" readonly="readonly" /></td>
</tr>
<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
| &nbsp CITCS 
<input type="radio" name="Course" value="CITCS"> &nbsp|
 &nbsp Nursing
<input type="radio" name="Course" value="Nursing"> &nbsp |
 &nbsp Accountancy
<input type="radio" name="Course" value="Accountancy"> &nbsp |
 &nbsp Engineering and Architecture
<input type="radio" name="Course" value="Engineering and Architecture"> &nbsp |
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
 <?php
 $First = $_GET["First"];
 $Last = $_GET["Last"];
 $Birthday = $_GET["Birthday"]; 
 $Month = $_GET["Month"];
 $Year = $_GET["Year"]; 
 $ID = $_GET["ID"];
 $Mobile = $_GET["Mobile"];
 $Gender = $_GET["Gender"];
 $Address = $_GET["Address"];
 $City = $_GET["City"];
 $Pin = $_GET["Pin"];
 $State = $_GET["State"];
 $Country = $_GET["Country"];
 $Course = $_GET["Course"];

 $f = fopen("info.txt" , "a");
 fwrite($f, "First Name:" . $First . "\n" . "Last Name:" . $Last . "\n" . "Birthday:" . $Birthday . "\n"
. "Month:" . $Month . "\n" . "Year:" . $Year . "\n" . "ID:" . $ID . "\n" . "Mobile:" . $Mobile . "\n" 
. "Gender:" . $Gender . "\n" . "Address:" . $Address . "\n" . "City:" . $City . "\n" 
. "Pin:" . $Pin . "\n" . "State:" . $State . "\n" . "Country:" . $Country . "\n" 
. "Course:" . $Course . "\n");
 fclose($f);
 ?>
</body>
</html>