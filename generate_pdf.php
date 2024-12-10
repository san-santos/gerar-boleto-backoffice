<?php
require 'database.php';
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.php">
    <title>Document</title>
</head>
<body>    

<?php
use Mpdf\Mpdf;

if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];

    // Buscar dados no banco
    $stmt = $pdo->prepare("SELECT * FROM clientes WHERE cpf = ?");
    $stmt->execute([$cpf]);
    $cliente = $stmt->fetch();

    if ($cliente) {
        $mpdf = new Mpdf();
        $html = "<h1>Boleto Gerado</h1>";

       // Captura o conteúdo do include
    ob_start();
    include './boleto-model/index.php';
    $html .= ob_get_clean();

        $mpdf->WriteHTML($html);
        $mpdf->Output("boleto.pdf", "D");
    } else {
        echo "CPF não encontrado!";
    }
}
?>
</body>
</html>