<?php

    $db = mysqli_connect('localhost', 'root', '', 'db_rent');

    if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
    }
    echo "Connected successfully";

    function querySql($query)
        {
        global $db;

        $item = mysqli_query($db, $query);
        $items = [];

        while ($row = mysqli_fetch_assoc($item)) {
            $items[] = $row;
            }

        return $items;
        }
