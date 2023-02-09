<?php
echo "The form was received by: " . $_POST['recipient'] . "</br>";  
echo "The subject is : " . $_POST['subject']. "</br>";
echo "The name entered is : " . $_POST['name'];
echo "My comments are : " . $_POST['comments']. "</br>";  
echo "My email is : " . $_POST['email']. "</br>";
echo "What I like are : ";
if (isset($_POST['thingsliked']))
$thingsliked = $_POST['thingsliked'];  
foreach($thingsliked as $check)
echo $check . ", ";
echo "</br>";
echo "My Radio Button choice : " . $_POST['howtosite']. "</br>";  
echo "My Drop Down select is : " . $_POST['rating']. "</br>";
?>