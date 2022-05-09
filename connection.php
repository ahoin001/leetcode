<?php echo "Hi There" ?>

<?php $host="localhost";
$port=3306;
$socket="";
$user="root";
$password="Alex9595**";
$dbname="sql_invoicing";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

    echo "Connected successfully" .  "<br>";

    $sql = "SELECT 
	c.client_id, c.name, c.state, 
	i.invoice_total, i.invoice_date

FROM clients c 
JOIN invoices i USING (client_id);
            ";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "Client_id: " . $row["client_id"]. " - Name: " . $row["name"]. " - state " . $row["state"]. " -invoice total" . $row["invoice_total"] . "<br>";
      }
    } else {
      echo "0 results";
    }


$con->close();
?>