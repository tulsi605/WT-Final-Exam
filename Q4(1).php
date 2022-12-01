<html>
<head>
<title>PHP Program to find the gross salary of an Employee</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="salary" value="" placeholder="Enter basic salary"/>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$basic_salary = $_POST['salary'];
$dallowance = 0.9 * $basic_salary;
$house_rent = 0.1 * $basic_salary;
$gross_salary = $basic_salary + $dallowance + $house_rent;
echo "Basic Salary : ".$basic_salary."/-";
echo "DA: " .$dallowance."/-";
echo "HRA : " .$house_rent ."/-";
echo "Salary : " .$gross_salary ."/-";
return 0;
}
?>
</body>
</html>