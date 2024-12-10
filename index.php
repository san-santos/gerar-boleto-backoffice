<?php include 'database.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.php">
    <title>Gerar Boleto</title>
    <style>
        form, .boleto { margin: 20px auto; width: 80%; }
        .boleto { border: 1px solid #000; padding: 20px; }
    </style>
</head>
<body>
    <h1>Gerar Boleto</h1>

    <form method="POST">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>CPF: <input type="text" name="cpf" maxlength="11" required></label><br>
        <label>Data de Nascimento: <input type="date" name="data_nascimento" required></label><br>
        <label>Nome da Mãe: <input type="text" name="nome_mae" required></label><br>
        <button type="submit" name="submit">Enviar</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $dataNascimento = $_POST['data_nascimento'];
        $nomeMae = $_POST['nome_mae'];

        // Verificar se o CPF já está no banco
        $stmt = $pdo->prepare("SELECT * FROM clientes WHERE cpf = ?");
        $stmt->execute([$cpf]);
        $cliente = $stmt->fetch();

        if (!$cliente) {
            // Inserir no banco
            $stmt = $pdo->prepare("INSERT INTO clientes (nome, cpf, data_nascimento, nome_mae) VALUES (?, ?, ?, ?)");
            $stmt->execute([$nome, $cpf, $dataNascimento, $nomeMae]);
            $cliente = ['nome' => $nome, 'cpf' => $cpf, 'data_nascimento' => $dataNascimento, 'nome_mae' => $nomeMae];
        }

        // Gerar boleto dinâmico
        echo '<div class="boleto">';
        echo "<h2>Boleto Gerado</h2>";        
        
        include './boleto-model/index.php';
        
        echo "<button onclick=\"window.location.href='generate_pdf.php?cpf={$cliente['cpf']}'\">Gerar PDF</button>";
        echo "<button onclick=\"window.location.href='send_email.php?cpf={$cliente['cpf']}'\">Enviar por E-mail</button>";
        echo '</div>';  
        
    }
    
    ?>
</body>
</html>
