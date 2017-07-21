<?php 

$doc = new DOMDocument;


$doc->preserveWhiteSpace = false;


$doc->strictErrorChecking = false;
$doc->recover = true;

$doc->loadHTMLFile('http://www.mortgagenewsdaily.com/mortgage_rates/daily.aspx');

$xpath = new DOMXPath($doc);

$query = "//td[@class='RateListItem rate current']";

$entries = $xpath->query($query);
$var = $xpath->evaluate('string(//td[@class="RateListItem rate current"])');
echo "$var";

$servername = "localhost";
$username = "root";
$password = "drupal8";
$dbname = "mortgages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "INSERT INTO rates (company_id, rate, date_time_stamp)
VALUES ('MND', '$var', FROM_UNIXTIME(1299762201428))";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>