<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hitung Honor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="calculate.php" method="POST">
        <h1>Form Hitung Honor</h1>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="working_hours">Jam Kerja:</label>
        <select id="working_hours" name="working_hours">
            <option value="40-44">40-44</option>
            <option value="45-49">45-49</option>
            <option value="50-54">50-54</option>
        </select><br><br>
        
        <label for="overtime_hours">Jam Lembur:</label>
        <input type="number" id="overtime_hours" name="overtime_hours" required><br><br>
        
        <input type="submit" value="Hitung Honor">
    </form>

    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        $working_hours = $_GET['working_hours'];
        $overtime_hours = $_GET['overtime_hours'];
        $base_salary = 5000000;
        $overtime_rate = 25000;
        $total_overtime_pay = $overtime_hours * $overtime_rate;
        $total_salary = $base_salary + $total_overtime_pay;
    ?>
    <div class="result">
        <h2>Hasil Perhitungan:</h2>
        <p>Nama: <?php echo $name; ?></p>
        <p>Jam Kerja Anda: <?php echo $working_hours; ?></p>
        <p>Jam Lembur Anda: <?php echo $overtime_hours; ?></p>
        <p>Honor Anda: Rp <?php echo number_format($base_salary, 0, ',', '.'); ?></p>
        <p>Honor Lembur Anda: Rp <?php echo number_format($total_overtime_pay, 0, ',', '.'); ?></p>
        <p>Total Honor Yang Diterima: Rp <?php echo number_format($total_salary, 0, ',', '.'); ?></p>
    </div>
    <?php
    }
    ?>
</body>
</html>
