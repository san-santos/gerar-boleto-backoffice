<?php include './database.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Boleto</title>
</head>

<body>
    <div class="pagina">
        <table>
            <tr>
                <td class="borda-left logo cabecalho">
                    <img src="" width="32">
                    Nome do Banco
                </td>
                <td class="borda-left cabecalho center">341-7</td>
                <td class="sem-borda cabecalho right" colspan="5">
                    Recibo do Pagador<br>
                    12345.12345 12345.121212 12345.121212 8 12345678901112
                </td>
            </tr>
            <tr>
                <td class="left" colspan="6">
                    <p>Local de Pagamento</p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam officia labore reprehenderit numquam
                    doloribus ut porro laboriosam itaque ipsa ratione.
                </td>
                <td class="center">
                    <p>Data de Vencimento</p>
                    02/01/2001
                </td>
            </tr>
            <tr>
                <td class="left" colspan="6">
                    <p>Nome do Beneficiário / CNPJ / CPF / Endereço:</p>
                    <?php echo "<p>Nome: {$cliente['nome']}</p>"?> <?php echo "<p>CPF: {$cliente['cpf']}</p>"?><br>
                    Rua Francisco Denny, 9 - Indaiatuba - São Paulo - SP - 00000-000
                </td>
                <td class="center">
                    <p>Agência/Código Beneficiário</p>
                    123/54321-01
                </td>
            </tr>
            <tr>
                <td class="center">
                    <p>Data do documento</p>
                    01/01/2001
                </td>
                <td class="center" colspan="2">
                    <p>Núm. do documento</p>
                    123
                </td>
                <td class="center">
                    <p>Espécie doc</p>
                    DM
                </td>
                <td class="center">
                    <p>Aceite</p>
                    N
                </td>
                <td class="center">
                    <p>Data Processamento</p>
                    01/01/2001
                </td>
                <td class="center">
                    <p>Nosso Número</p>123456789
                </td>
            </tr>
            <tr>
                <td class="center">
                    <p>Uso do Banco</p>
                    <br>
                </td>
                <td class="center">
                    <p>Carteira</p>
                    157
                </td>
                <td class="center">
                    <p>Espécie</p>
                    R$
                </td>
                <td class="center" colspan="2">
                    <p>Quantidade</p>
                    <br>
                </td>
                <td class="center">
                    <p>Valor</p>
                    <br>
                </td>
                <td class="center">
                    <p>(=) Valor do Documento</p>
                    <!-- <?php echo "<p>Valor: {$valor['valor']}</p>"?> -->
                </td>
            </tr>
            <tr>
                <td class="left" colspan="6" rowspan="3">
                    <p>Instruções</p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam officia labore reprehenderit numquam
                    doloribus ut porro laboriosam itaque ipsa ratione.
                </td>
                <td class="center">
                    <p>(-) Descontos/Abatimentos</p>
                    02/01/2001
                </td>
            </tr>
            <tr>
                <td class="center">
                    <p>(+) Juros/Multa</p>
                    02/01/2001
                </td>
            </tr>
            <tr>
                <td class="center">
                    <p>(=) Valor Pago</p>
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <table>
                        <tr>
                            <td class="sem-borda"><b>Nome do Pagador: </b> Fulano de Tal 2</td>
                            <td class="sem-borda"><b>CPF/CNPJ: </b> 123.123.123-00</td>
                        </tr>
                        <tr>
                            <td class="sem-borda"><b>Endereço: </b> Av. André Araujo, 999 - Aleixo - Amazonas - AM -
                                69060-000
                            </td>
                        </tr>
                        <tr>
                            <td class="sem-borda"><b>Sacador/Avalista: </b> Fulano de Tal 2</td>
                            <td class="sem-borda"><b>CPF/CNPJ: </b> 123.123.123-00</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <p class="lb-autenticacao"><b>Autenticação Mecânica</b></p>
        <hr><br>
        <table>
            <tr>
                <td class="borda-left logo cabecalho ">
                    <img src="" width="32">
                     Nome do Banco
                </td>
                <td class="borda-left cabecalho center">341-7</td>
                <td class="sem-borda cabecalho right" colspan="5">
                    12345.12345 12345.121212 12345.121212 8 12345678901112
                </td>
            </tr>
            <tr>
                <td class="left" colspan="6">
                    <p>Local de Pagamento</p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam officia labore reprehenderit numquam
                    doloribus ut porro laboriosam itaque ipsa ratione.
                </td>
                <td class="center">
                    <p>Data de Vencimento</p>
                    02/01/2001
                </td>
            </tr>
            <tr>
                <td class="left" colspan="6">
                    <p>Nome do Beneficiário / CNPJ / CPF / Endereço:</p>
                    Fulano de Tal CPF: 123.456.789.10 <br>
                    Rua Francisco Denny, 9 - Indaiatuba - São Paulo - SP - 00000-000
                </td>
                <td class="center">
                    <p>Agência/Código Beneficiário</p>
                    123/54321-01
                </td>
            </tr>
            <tr>
                <td class="center">
                    <p>Data do documento</p>
                    01/01/2001
                </td>
                <td class="center" colspan="2">
                    <p>Núm. do documento</p>
                    123
                </td>
                <td class="center">
                    <p>Espécie doc</p>
                    DM
                </td>
                <td class="center">
                    <p>Aceite</p>
                    N
                </td>
                <td class="center">
                    <p>Data Processamento</p>
                    01/01/2001
                </td>
                <td class="center">
                    <p>Nosso Número</p>123456789
                </td>
            </tr>
            <tr>
                <td class="center">
                    <p>Uso do Banco</p>
                    <br>
                </td>
                <td class="center">
                    <p>Carteira</p>
                    157
                </td>
                <td class="center">
                    <p>Espécie</p>
                    R$
                </td>
                <td class="center" colspan="2">
                    <p>Quantidade</p>
                    <br>
                </td>
                <td class="center">
                    <p>Valor</p>
                    <br>
                </td>
                <td class="center">
                    <p>(=) Valor do Documento</p>
                    10,99
                </td>
            </tr>
            <tr>
                <td class="left" colspan="6" rowspan="3">
                    <p>Instruções</p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam officia labore reprehenderit numquam
                    doloribus ut porro laboriosam itaque ipsa ratione.
                </td>
                <td class="center">
                    <p>(-) Descontos/Abatimentos</p>
                    02/01/2001
                </td>
            </tr>
            <tr>
                <td class="center">
                    <p>(+) Juros/Multa</p>
                    02/01/2001
                </td>
            </tr>
            <tr>
                <td class="center">
                    <p>(=) Valor Pago</p>
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <table>
                        <tr>
                            <td class="sem-borda"><b>Nome do Pagador: </b> Fulano de Tal 2</td>
                            <td class="sem-borda"><b>CPF/CNPJ: </b> 123.123.123-00</td>
                        </tr>
                        <tr>
                            <td class="sem-borda"><b>Endereço: </b> Av. André Araujo, 999 - Aleixo - Amazonas - AM -
                                69060-000
                            </td>
                        </tr>
                        <tr>
                            <td class="sem-borda"><b>Sacador/Avalista: </b> Fulano de Tal 2</td>
                            <td class="sem-borda"><b>CPF/CNPJ: </b> 123.123.123-00</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td class="sem-borda" rowspan="2">
                    <img class="codigo-barras" src="codigo-barras.png">
                </td>
                <td class="sem-borda cabecalho right">
                    Ficha de Compensação
                </td>
            </tr>
            <tr>
                <td class="sem-borda right">
                    <p class="lb-autenticacao"><b>Autenticação Mecânica</b></p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
