<?php
        // Konfigurasi koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "advw"; // Ganti dengan nama database Anda

        // Membuat koneksi ke database
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }
        ?>