
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form name="form" method="post">
        keuze: <input type="number" name="bestel">
        <input type="submit" name="submit">
        </form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $bestel = $_POST['bestel'];
    if(($bestel <4) && ($bestel >0)) {
        $_SESSION["gekozenNummer"] = $_POST['bestel'];
    }
}
if(isset($_SESSION["gekozenNummer"])) {
    echo ("gekozen nummer #". $_SESSION['gekozenNummer']);
}
        ?>