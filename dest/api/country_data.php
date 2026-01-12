<?php

require_once __DIR__ . "/../config/dbcon.php";

function getAllCountries() {
    global $conn;

    $sql = "SELECT * 
            FROM countries 
            ORDER BY phonecode ASC";

    $result = mysqli_query($conn, $sql);

    $countries = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $countries[] = $row;
    }

    return $countries;
}
