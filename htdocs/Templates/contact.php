<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<head>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of fitness
            const fitness = { lat: -51.99615436830543, lng: 4.330484411914864 };
            // The map, centered at fitness
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: fitness,
            });
            // The marker, positioned at fitness
            const marker = new google.maps.Marker({
                position: fitness,
                map: map,
            });
        }
    </script>
</head>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <h4>Contact ons</h4>
        <h5>Telefoonnummer: 0152578929</h5>
        <h5>Adres: Zuidhoornse weg 8 - 2639 DJ, Delft</h5>
    <h3>Onze locatie</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcEh2ma93luwM3j2wlyxbuxqbmBWUeJL0&callback=initMap&libraries=&v=weekly"
            async
    ></script>
    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>