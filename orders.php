<title>order</title>
<link rel="stylesheet" href="style.css">
<body>
<section class="order" id="order">

<h1 class="heading"><span>Order</span> Ticket</h1>

<div class="row">
    <form action="" method="post">
                <input type="text" placeholder="Name" name="nama" class="box" required>
                <input type="email" placeholder="E-mail" name="email" class="box" required>
                <input type="text" placeholder="Phone Number" name="phone" class="box" required>
                <input type="number" placeholder="Amount Ticket" name="amount" class="box" required min="1">
                <input type="date" placeholder="mm/dd/yyyy" name="date" class="box" required>
                <input type="submit" value="Send Message" class="btn">
            </form>
    </div>
</div>
</section> 

<?php
// Validasi dan penyimpanan data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form menggunakan $_POST
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $amount = $_POST['amount'] ?? '';
    $date = $_POST['date'] ?? '';

    // Validasi sederhana (bisa disesuaikan sesuai kebutuhan)
    if (empty($name) || empty($email) || empty($phone) || empty($amount) || empty($date)) {
        $errorMessage = "Please fill in all fields.";
    } else {
        // Membuka file untuk ditulis dengan mode "a" untuk menambahkan ke akhir file
        $fp = fopen("orders.txt", "a");

        // Menulis data ke file
        fwrite($fp, "Name : " . $name . "\n");
        fwrite($fp, "E-mail : " . $email . "\n");
        fwrite($fp, "Phone Number : " . $phone . "\n");
        fwrite($fp, "Amount Ticket : " . $amount . "\n");
        fwrite($fp, "Date : " . $date . "\n");

        // Menutup file setelah selesai
        fclose($fp);

        // Pengumuman bahwa data telah berhasil disimpan
        $successMessage = "Data has been saved successfully.";
    }
}