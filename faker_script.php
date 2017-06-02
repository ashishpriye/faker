<?php
require_once '/home/ashish/slim_example1/vendor/fzaninotto/faker/src/autoload.php';
require '/home/ashish/slim_example1/templates/connect.php';



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
