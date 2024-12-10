<?php
require 'database.php';
require 'vendor/autoload.php'; // Biblioteca PHPMailer

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];

    // Buscar dados no banco
    $stmt = $pdo->prepare("SELECT * FROM clientes WHERE cpf = ?");
    $stmt->execute([$cpf]);
    $cliente = $stmt->fetch();

    if ($cliente) {
        // Criar o PDF
        $html = "<h1>Boleto Gerado</h1>";
        $html .= "<p>Nome: {$cliente['nome']}</p>";
        $html .= "<p>CPF: {$cliente['cpf']}</p>";
        $html .= "<p>Data de Nascimento: {$cliente['data_nascimento']}</p>";
        $html .= "<p>Nome da Mãe: {$cliente['nome_mae']}</p>";

        $file = "boleto.pdf";
        file_put_contents($file, $html);

        // Configurar e-mail
        $mail = new PHPMailer();
        $mail->setFrom('seuemail@dominio.com', 'Seu Nome');
        $mail->addAddress('destinatario@dominio.com');
        $mail->Subject = "Boleto Gerado";
        $mail->Body = "Segue em anexo o boleto gerado.";
        $mail->addAttachment($file);

        if ($mail->send()) {
            echo "E-mail enviado com sucesso!";
        } else {
            echo "Erro ao enviar e-mail.";
        }

        unlink($file);
    } else {
        echo "CPF não encontrado!";
    }
}
?>
