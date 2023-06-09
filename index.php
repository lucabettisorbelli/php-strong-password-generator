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
                    <div class="form">
                        <form method="get">
                            <label for="length">Scegli la lunghezza della password:</label>
                            <input type="number" id="length" name="length" min="1" max="10">
                            <input type="submit" value="Genera">
                        </form>
                    </div>
                    <div class="boxPassword">
                        <?php

                        function generatePassword($length)
                        {
                            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
                            $charactersLength = strlen($characters);
                            $randomPassword = '';
                            for ($i = 0; $i < $length; $i++) {
                                $randomPassword .= $characters[rand(0, $charactersLength - 1)];
                            }
                            return $randomPassword;
                        }

                        if (isset($_GET['length'])) {
                            $length = $_GET['length'];
                            $password = generatePassword($length);
                            echo "La tua password casuale è: $password";
                        }


                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>