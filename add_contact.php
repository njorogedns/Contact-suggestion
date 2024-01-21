    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contacts";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	echo "Connected successfully";
	
    $sqlRetrieveContacts = "SELECT * FROM contacts";
    $result = $conn->query($sqlRetrieveContacts);

    if ($result->num_rows > 0) {
        echo "<h2>Suggested Contacts:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>Name: " . $row["name"] . ", Phone Number: " . $row["phone_number"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No contacts found</p>";
    }

    $conn->close();
    ?>