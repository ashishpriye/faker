<?php
require_once '/path/to/vendor/fzaninotto/faker/src/autoload.php';
require '/database/connectivity/connect.php';



$faker = Faker\Factory::create();

for($i=0;$i<10;$i++)
{
$sql = "INSERT INTO user (firstname, lastname, email) VALUES ('$faker->firstName', '$faker->lastName', '$faker->email')";

if(mysqli_query($conn, $sql))
{
echo "successful";
}
else
{
echo "error";
}

}

?>
