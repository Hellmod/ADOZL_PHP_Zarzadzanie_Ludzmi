<?php


    // łączymy się z bazą danych
    $connection = @mysql_connect('sqrfccom_rafal', 'Korniszon', '')		or die('Brak połączenia z serwerem MySQL');
    $db = @mysql_select_db('sqrfccom_firma', $connection)					or die('Nie mogę połączyć się z bazą danych');
    
?>