<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="info">
        <label class="cpf">CPF: 020.220.498-70</label>
        <label class="nome">Nome: Ariovaldo Cazetta</label>
        <label class="time">Horario: 00:00:00</label>
        <label class="protoc">Protocolo: 20231403943</label>
    </div>
    <div class="container">
        <table class="gTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Arquivos</th>
                    <th>Situação</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Identidade</td>
                    <td style="color: red;">Pendente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Carteira de Motorista</td>
                    <td style="color: green;">Encaminhado</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>CPF</td>
                    <td style="color: blue;">Analisado</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
                <table class="rTable">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Arquivo</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10/06/2023</td>
                    <td>10:00:00</td>
                    <td style="color: yellow;">Anexado</td>
                    <td></td>
                </tr>
                <tr>
                    <td>08/06/2023</td>
                    <td>08:00:00</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>11/06/2023</td>
                    <td>09:00:00</td>
                    <td style="color: yellow;">Anexado</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>