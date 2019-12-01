<html>
<head>
</head>
<body>
<table>
<tr>
<td>
Instance ID
</td>
<td>
<?php    
echo file_get_contents( "ansible_ec2_instance_id" ); 
?>
</td>
</tr>
<tr>
<td>
User Data
</td>
<td>
<?php    
echo file_get_contents( "ansible_ec2_user_data" ); 
?>
</td>
</tr>
<tr>
<td>
Configuration de la BD
</td>
<td>
<?php   
echo file_get_contents( "filename.php" );  
?>
</td>
</tr>
</table>
</body>
</html>
