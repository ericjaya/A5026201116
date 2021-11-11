<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Gaya Gravitasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        h3 {
            margin-left: 40px;
            margin-top: 20px;
        }

        h1 {
            margin-left: 40px;
            margin-top: 20px;
        }

        body {
            background-color: #e0f4ff;
        }

        .card {
            flex: auto;
            min-height: 300px;
            font-family: 'Poppins', sans-serif;
            border-radius: 20px;
            margin-top: 80px;
            margin-bottom: 50px;
            border: 0px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .texthasil {
            margin-bottom: 30px;
        }

        .angka {
            color: #26bbe0;
        }

        .btn-light:hover {
            background-color: #bcdff1;
        }

        .btn {
            background-color: #26bbe0;
            color: white;
            border: 0px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            margin-top: 20px;
            margin-left: 40px;
        }

        .btn:hover {
            background-color: #1793b3;
        }

        .col-flex {
            margin-left: 20px;
        }

    </style>
    <script>
        <?php function gravitasi($massa1, $massa2, $jarak)
        {
            $G = 6.67430 * pow(10, -11);
            $gravitasi = ($G * $massa1 * $massa2) / ($jarak * $jarak);
            return $gravitasi;
        }
        ?>
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <h3>Gaya Gravitasi antara benda 1 yang memiliki massa <span class="angka"><?php echo $_GET["massa1"] ?></span> kilogram </h3>
                <h3>dan benda 2 yang memiliki massa <span class="angka"><?php echo $_GET["massa2"] ?></span> kilogram </h3>
                <h3>yang memiliki jarak <span class="angka"><?php echo $_GET["jarak"] ?></span> meter </h3>
                <h3>adalah sebesar:</h3>
                <div class="texthasil">
                    <div class="row">
                        <div class="col-flex">
                            <h1> <?php echo gravitasi($_GET["massa1"], $_GET["massa2"], $_GET["jarak"]);
                                    ?> </h1>
                        </div>
                        <div class="col">
                            <h1>Newton</h1>
                        </div>
                    </div>
                    <form action="tugasphp">
                        <button class="btn btn-outline-primary btn-lg" id="kembali" name="kembali">
                            < Kembali</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
