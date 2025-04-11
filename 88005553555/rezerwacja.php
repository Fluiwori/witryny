<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "baza1");

    if (!$polaczenie) {
        die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
    }

    $data = $_POST['data'];
    $liczba_osob = $_POST['liczba_osob'];
    $telefon = $_POST['telefon'];

    $zapytanie = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) 
                  VALUES ('$data', $liczba_osob, '$telefon')";

    mysqli_query($polaczenie, $zapytanie);

    echo "Dodano rezerwację do bazy";

    mysqli_close($polaczenie);
?>