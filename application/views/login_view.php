<?php

$this->load->helper('form');
echo form_open('login/check');
$array = array('name' => 'username');
echo "username: " . form_input($array) . "<br>";
$array = array('name' => 'password');
echo "password: " . form_input($array) . "<br>";
echo form_submit('Logga in', 'Logga in');

echo "<br><a href='/CI/index.php/registration'>Registration</a>";

?>