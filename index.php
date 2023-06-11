<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titolo text-center py-2">
                    <h1>Genera una password sicura</h1>
                    <form method="get">
                        <label for="length">Scegli la lunghezza della password:</label>
                        <input type="number" id="length" name="length" min="1" max="10">

                        <br>

                        <input type="checkbox" id="useNumbers" name="useNumbers">
                        <label for="useNumbers">Usa numeri</label>

                        <input type="checkbox" id="useLetters" name="useLetters">
                        <label for="useLetters">Usa lettere</label>

                        <input type="checkbox" id="useSymbols" name="useSymbols">
                        <label for="useSymbols">Usa simboli</label>

                        <br>

                        <input type="checkbox" id="sameCharacters" name="sameCharacters">
                        <label for="sameCharacters">Permetti ripetizione di caratteri uguali</label>

                        <br>

                        <input type="submit" value="Genera">
                    </form>
                </div>
                <div class="boxPassword">
                    <?php include 'function.php'; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>