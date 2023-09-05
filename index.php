<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor m/s para km/H</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <?php
        $ms = $_GET['ms'] ?? 0;
        $kmh = $ms * 3.6;
    ?>

    <div class="xd">
        <div class="header">
            <h1>Conversor m/s ➝ km/h</h1>
        </div>

        <div class="conteiner">
            <div class="form-box">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

                    <div class=" input-box">
                        <input type="number" placeholder="m/s" name="ms" value="<?=$ms?>" step="0.001">
                    </div>

                    <div class=" input-box">
                        <input type="submit" value="Converter" class="sub">
                    </div>
                </form>
            </div>
            <div class="result">
                <?php
                 echo "$ms m/s após convertido será " .number_format($kmh, 1,",")." km/H</strong>";
                ?>
            </div>
        </div>
    </div>



</body>




</html>