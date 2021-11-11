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
    <script>
        function gravitasi2benda() {
            var massa1 = document.getElementById("massa1").value;
            var massa2 = document.getElementById("massa2").value;
            var jarak = document.getElementById("jarak").value;
            var G = 6.67430 * Math.pow(10, -11);
            var gayaGravitasi = (G * massa1 * massa2) / (jarak * jarak);
            return gayaGravitasi;
        }

    </script>
    <style>
        body {
            background-color: #f3fbff;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            font-family: 'Poppins', sans-serif;
            font-weight: 1000;
        }

        .card {
            min-height: 300px;
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
        }

        .btn-block:hover {
            background-color: #1793b3;
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
            <div class="col-md-6">
                <br>
                <div class="form-group">
                    <form>
                        <label for="massa1">
                            <h5>Massa benda 1 (kg)</h5>
                        </label>
                        <input type="number" class="form-control" id="massa1" name="massa1"
                            placeholder="Masukkan massa benda dalam kg">
                    </form>
                </div>
                <div>
                    <button type="submit" class="btn btn-light btn-sm" id="massaBumi">Massa Bumi</button>
                    <script>
                        $(document).ready(
                            function () {
                                $("#massaBumi").click(function (event) {
                                    $('#massa1').val(5972200000000000000000000);
                                });
                            }
                        )
                    </script>
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <form>
                        <label for="massa2">
                            <h5>Massa benda 2 (kg)</h5>
                        </label>
                        <input type="number" class="form-control" id="massa2" name="massa2"
                            placeholder="Masukkan massa benda dalam kg">
                    </form>
                </div>
                <div class="form-group">
                    <form>
                        <label for="jarak">
                            <h5>Jarak antara kedua benda (m)</h5>
                        </label>
                        <input type="number" class="form-control" id="jarak" name="jarak"
                            placeholder="Masukkan jarak antara kedua benda dalam m">
                    </form>
                </div>
                <div>
                    <button type="submit" class="btn btn-light btn-sm" id="radiusBumi">Radius Bumi</button>
                    <script>
                        $(document).ready(
                            function () {
                                $("#radiusBumi").click(function (event) {
                                    $('#jarak').val(6371000);
                                });
                            }
                        )
                    </script>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block" id="hitung1"
                    style="margin-top: 20px;">Hitung</button>
                <script>
                    $(document).ready(
                        function () {
                            $("#hitung1").click(function () {
                                $('#hasilgravitasi2benda').html(gravitasi2benda() + " N");
                            }
                            );
                        }
                    )
                </script>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Gaya Gravitasi antara 2 benda tersebut adalah</h3>
                        <br>
                        <h1 id="hasilgravitasi2benda"></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>
