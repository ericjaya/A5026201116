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
        body {
            background-color: #e0f4ff;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            font-family: 'Poppins', sans-serif;
            font-weight: 1000;
        }

        .card {
            flex: auto;
            font-family: 'Poppins', sans-serif;
            border-radius: 20px;
            margin-top: 50px;
            margin-bottom: 50px;
            border: 0px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        p {
            font-family: 'Poppins', sans-serif;
        }

        .form-group {
            font-family: 'Poppins', sans-serif;
            border-radius: 10px;
        }

        .col-md-6 {
            font-family: 'Poppins', sans-serif;
            margin-top: 50px;
        }

        .btn-light {
            background-color: #e0f4ff;
        }

        .btn-light:hover {
            background-color: #bcdff1;
        }

        .btn-block {
            background-color: #26bbe0;
            color: white;
            border: 0px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            margin-top: 40px;
        }

        .btn-block:hover {
            background-color: #1793b3;
        }

        .form {
            margin-top: 20px;
            margin-left: 40px;
            margin-right: 40px;
            margin-bottom: 45px
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 30px;">
            <div class="col">
                <h1 class="judul"><b>Kalkulator Gaya Gravitasi</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="col">
                    <br>
                    <form name="form" action="hasilphp" class="form">
                        <div class="form-group">
                            <label for="massa1">
                                <h5>Massa benda 1 (kg)</h5>
                            </label>
                            <input type="number" class="form-control" id="massa1" name="massa1"
                                placeholder="Masukkan massa benda dalam kg" required>
                        </div>
                        <div class="form-group" style="margin-top: 10px;">
                            <label for="massa2">
                                <h5>Massa benda 2 (kg)</h5>
                            </label>
                            <input type="number" class="form-control" id="massa2" name="massa2"
                                placeholder="Masukkan massa benda dalam kg" required>
                        </div>
                        <div class="form-group">
                            <label for="jarak">
                                <h5>Jarak antara kedua benda (m)</h5>
                            </label>
                            <input type="number" class="form-control" id="jarak" name="jarak"
                                placeholder="Masukkan jarak antara kedua benda dalam m" required>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-block btn-lg"
                            id="hitung1">Hitung</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
