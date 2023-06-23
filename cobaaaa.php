<?php
    include "connection.php";
    $sql = "SELECT * FROM eventt";
    $all_event = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="english">
  <head>
    <title>SaC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] { appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-image: url(public/external/bg-home.png);
        background-attachment:fixed;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" />

    <script>
        function showPopup(eventID) {
        // Make an AJAX request to fetch the event details
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var event = JSON.parse(xhr.responseText);
                    if (event) {
                        // Display the popup with the event details
                        var popupContent = document.querySelector("#popup .popup-content");
                        popupContent.innerHTML = `
                            <h2>${event.Nama_Event}</h2>
                            <p>${event.Deskripsi_Event}</p>
                            <span class="close-btn" onclick="hidePopup()">Close</span>
                        `;

                        // Show the popup
                        document.getElementById("popup").style.display = "block";
                    } else {
                        console.log("Event details not found.");
                    }
                } else {
                    console.log("Error fetching event details.");
                }
            }
        };
        xhr.open("GET", "./get-event-details.php?event_id=" + eventID, true);
        xhr.send();
    }

    function hidePopup() {
        // Hide the popup
        document.getElementById("popup").style.display = "none";
    }
    </script>

  </head>
  <body>
    <link rel="stylesheet" href="./homee.css" />
    <div style="display: flex; width:100%; height:80px; flex-wrap: wrap; margin: auto;">
      <img
        src="public/external/jammenu1283-vyjk.svg"
        style="margin:80px;"
      />

      <img
        src="public/external/rectangle191283-331c-200h.png"
        style="height:70px; margin-top:100px; width:1107px;"
      />

      <input type="text" name="search" style="background-color: transparent; outline:0cm; margin-left:350px; width:1017px; height:70px; margin-top:-160px;">

      <img
        src="public/external/search1283-842.svg"
        style="margin-left:-1080px; margin-top:-250px;"
      />

      <img
        src="public/external/logoo.png"
        style="margin-left: 1300px; height:100px; margin-top:-170px;"
      />
    </div>

    <div class="bawah-nav">
      <span>Event Type</span>

      <img
        src="public/external/vector1283-2s6l.svg"
      />

      <span>Any Category</span>

      <img
        src="public/external/vector1283-8l7w.svg"
      />

      <span>Upcoming Events</span>
    </div>

    <main>
      <div class="card-container">
        <?php while($row = mysqli_fetch_assoc($all_event)): ?>
        <div class="card">
          <div class="image">
            <img src="image/<?php echo $row["Image"];?>" alt="Event Image">
          </div>
          <div class="caption">
            <p class="date"><?php echo $row["Tanggal_Event"];?></p>
            <p class="month"><?php echo $row["Tanggal_Event"];?></p>
            <p class="name"><?php echo $row["Nama_Event"];?></p>
            <p class="desc"><?php echo $row["Deskripsi_Event"];?></p>
          </div>
          <button class="show" onclick="showPopup(<?php echo $row['Id_Event']; ?>)">Register</button>
        </div>
        <?php endwhile; ?>
      </div>
    </main>


    <form method="post" style="position:fixed; top:750px; left: 1500px;">
        <img src="public/external/buttonBiru.png" style="position:sticky;"/>
        <input type="submit" name="add" value="Add Event" style="position:sticky; background-color: transparent; font-size: 27px; font-family: Poppins; font-weight:600; width:240px; margin-left: 30px; bottom:95px;">
    </form>

    <div id="popup" style="display: none;">
        <div class="popup-content">
            <!-- Event details will be dynamically populated here -->
        </div>
    </div>

  </body>
</html>

SEMANGAT...
