<?php
    include "connection.php";

    if (isset($_GET['event_id'])) {
        $eventID = $_GET['event_id'];

        // Retrieve event details from the database using the event ID
        $sql = "SELECT * FROM eventt WHERE Id_Event = '$eventID'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $event = $result->fetch_assoc();
            echo json_encode($event);
        } else {
            echo json_encode(null);
        }
    } else {
        echo json_encode(null);
    }
?>
