<?php echo "Hi There" ?>

<?php $host="localhost";
$port=3306;
$socket="";
$user="root";
$password="Alex9595**";
$dbname="sql_invoicing";

//* instance of connection to db
$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

    echo "Connected successfully" .  "<br>";

    // *create a query to excecute
    $sql = "SELECT 
	        c.client_id, c.name, c.state, 
	        i.invoice_total, i.invoice_date
            FROM clients c 
            JOIN invoices i USING (client_id);
            ";

    //* use connection instance to run query on DB and get result
    $result = $con->query($sql);

    //* fetch _assoc will pull the top record off returned rows
    print_r($result->fetch_assoc());
    echo "<br>";
    print_r($result->fetch_assoc());
    echo "<br>";

    // ? So how do we get all rows?
    //* if result contains some records
    if ($result->num_rows > 0) {

      //* while they're still rows to pull off the rows from result, print them all out 
      while($row = $result->fetch_assoc()) {
        echo "Client_id: " . $row["client_id"]. " - Name: " . $row["name"]. " - state " . $row["state"]. " -invoice total" . $row["invoice_total"] . "<br>";
      }
    } else {
      echo "0 results";
    }


$con->close();
?>