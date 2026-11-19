<?php
$host = 'db';
$user = 'uczen';
$pass = 'uczen123';
$dbname = 'szkola';

$status = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connect'])) {
    $conn = @mysqli_connect($host, $user, $pass, $dbname);

    if ($conn) {
        $status = 'Połączono z bazą danych (szkola) jako uczen!';
        mysqli_close($conn);
    } else {
        $status = 'Błąd połączenia: ' . mysqli_connect_error();
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_date'])) {
    $conn = @mysqli_connect($host, $user, $pass, $dbname);

    if ($conn) {
        mysqli_query($conn, "CREATE TABLE IF NOT EXISTS klikniecia (
            id INT AUTO_INCREMENT PRIMARY KEY,
            data_klikniecia DATETIME NOT NULL
        )");

        $sql = "INSERT INTO klikniecia (data_klikniecia) VALUES (NOW())";

        if (mysqli_query($conn, $sql)) {
            $status = 'Dodano datę kliknięcia do bazy.';
        } else {
            $status = 'Błąd zapisu: ' . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        $status = 'Błąd połączenia: ' . mysqli_connect_error();
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Praca domowa</title>
</head>
<body>
    <header>
        <h1>Moja strona</h1>
    </header>

    <main>
        <p>Maciek Bartnik</p>

        <form method="post">
            <button type="submit" name="connect">Połącz z bazą</button>
        </form>
         <form method="post">
            <button type="submit" name="add_date">Wykonaj skrypt</button>
        </form>

        <?php if ($status !== ''): ?>
            <p><?php echo htmlspecialchars($status, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
    </main>
</body>
</html>