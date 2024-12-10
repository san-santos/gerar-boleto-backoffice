<?php
header("Content-type: text/css");
?>

/* Reset básico */
body, h1, h2, h3, p, label, input, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilo geral */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    padding: 20px;
    color: #333;
}

h1 {
    text-align: center;
    color: #0056b3;
    margin-bottom: 20px;
}

form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto 20px;
    border:1px solid #000;
}

form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

form button {
    background-color: #0056b3;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

form button:hover {
    background-color: #003d82;
}

/* Estilo do boleto */

.boleto {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 20px auto;
}

.boleto h2 {
    color: #0056b3;
    margin-bottom: 15px;
    text-align: center;
}

.boleto p {
    margin-bottom: 10px;
    font-size: 14px;
}

.boleto button {
    background-color: #0056b3;
    font-size: 16px;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
    margin-top: 24px;
}

.boleto button:hover {
    background-color: #003d82;
}

/* Botões adicionais */
.boleto .btn-red {
    background-color: #dc3545;
}

.boleto .btn-red:hover {
    background-color: #a71d2a;
}

/* Responsividade */
@media (max-width: 768px) {
    form, .boleto {
        width: 90%;
        padding: 15px;
    }
}


//Boleto

.pagina {
            width: 110mm;
            font-family: Helvetica,
                Arial,
                "Lucida Grande",
                sans-serif;
            font-size: 8pt;
            font-weight: bold;
            margin: 5mm auto;
        }

        table {
            max-width: 785px;
            border-collapse: collapse;
        }

        td {
            border: 1pt black solid;
            padding-left: 2pt;
            padding-right: 2pt;
            font-weight: normal;
        }

        td.center {
            text-align: center;
            vertical-align: super;
        }

        td.left {
            text-align: left;
            vertical-align: super;
        }

        td.right {
            text-align: right;
            vertical-align: super;
        }

        p {
            font-weight: bold;
            text-align: left;
            white-space: nowrap;
            margin-top: 2pt;
        }

        td.sem-borda {
            border: none;
        }

        td.borda-left {
            border: none;
            border-right: 1pt solid;
            vertical-align: bottom;
        }

        td.cabecalho {
            padding: 0 2mm 0 2mm;
            font-weight: bolder;
            font-size: 10pt;
            vertical-align: bottom;
        }

        td.logo {
            font-size: 8pt;
        }

        hr {
            border-top: 1pt dashed
        }

        p.lb-autenticacao {
            text-align: right;
            margin-right: 5mm;
        }

        .codigo-barras {
            width: 116mm;
            height: 60px;
        }

        @media print {
            .noprint {
                display: none;
            }

            .pagina {
                width: 100%;
            }
        }