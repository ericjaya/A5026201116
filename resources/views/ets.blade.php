<!DOCTYPE html>
<html>

<head>
    <title>UTS Pemrograman Web Kode Soal D</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .container {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        h3 {
            text-align: center;
        }

        tr,
        td {
            border-style: none;
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

        p {
            color: red;
        }

        .identitas {
            color: black;
        }

        .simpan {
            background-color: rgb(25, 53, 177);
            color: white;
        }

        .reset {
            background-color: rgb(0, 255, 42);
            color: rgb(0, 0, 0);
        }
    </style>
    <script>
        function validateFormNama() {
            let a = document.getElementById("nama").value;
            const regexp = /^[A-Za-z ]{10,}$/;
            const b = regexp.test(document.getElementById("nama").value);

            if (a == "") {
                $("#petunjuknama").text("Anda belum memasukkan nama Anda");
                return false;
            }
            else if (b === false) {
                $("#petunjuknama").text("Nama tidak boleh mengandung angka dan kurang dari 10");
                return false;
            } else {
                $("#petunjuknama").text("");
                return true;
            }
        }

        function validateFormNIK() {
            let c = document.getElementById("nik").value;
            const regexnik = /^.{16}$/;
            const d = regexnik.test(document.getElementById("nik").value);

            if (c == "") {
                $("#petunjuknik").text("Anda belum memasukkan NIK Anda");
                return false;
            }
            else if (d === false) {
                $("#petunjuknik").text("NIK harus 16 digit");
                return false;
            } else {
                $("#petunjuknik").text("");
                return true;
            }
        }

        function validateFormJenis() {
            let e = document.getElementById("jenis").value;

            if (e == "") {
                $("#petunjukjenis").text("Anda belum memilih Jenis Vaksin Anda");
                return false;
            } else {
                $("#petunjukjenis").text("");
                return true;
            }
        }

        function validateFormBatch() {
            let f = document.getElementById("batch").value;
            const regexbatch = /^[A-Za-z0-9]/;
            const g = regexbatch.test(document.getElementById("batch").value);

            if (f == "") {
                $("#petunjukbatch").text("Anda belum memasukkan no batch Anda");
                return false;
            } else if (g === false) {
                $("#petunjukbatch").text("No Batch tidak boleh mengandung tanda baca");
                return false;
            } else {
                $("#petunjukbatch").text("");
                return true;
            }
        }

        function hapus() {
            $("#petunjuknama").text("");
            $("#petunjuknik").text("");
            $("#petunjukjenis").text("");
            $("#petunjukbatch").text("");
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="identitas">Eric Jaya Aziz</p>
                <p class="identitas">Eric</p>
                <p class="identitas">5026201116</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Form Input Peserta Vaksinasi</h3>
                <br>
            </div>
        </div>
        <div class="row">
            <table style="width:100%">
                <form name="form" action="https://www.its.ac.id/"
                    onsubmit="return validateFormNama() && validateFormNIK() && validateFormJenis() && validateFormBatch()">
                    <tr>
                        <td>Nama Peserta</th>
                        <td>:</th>
                        <td><input type="text" class="form-control" id="nama" oninput="validateFormNama()">
                            <p id="petunjuknama"></p>
                            </th>
                    </tr>
                    <tr>
                        <td>NIK</th>
                        <td>:</th>
                        <td><input type="number" class="form-control" id="nik" oninput="validateFormNIK()">
                            <p id="petunjuknik"></p>
                            </th>
                    </tr>
                    <tr>
                        <td>Jenis Vaksin</th>
                        <td>:</th>
                        <td><select class="form-control" id="jenis" oninput="validateFormJenis()"></p>
                                <option> </option>
                                <option>AZ</option>
                                <option>Sinovac</option>
                                <option>Moderna</option>
                            </select>
                            <p id="petunjukjenis"></p>
                            </th>
                    </tr>
                    <tr>
                        <td>No Batch</th>
                        <td>:</th>
                        <td><input type="text" class="form-control" id="batch" oninput="validateFormBatch()">
                            <p id="petunjukbatch"></p>
                            </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <button type="submit" class="btn simpan" id="submit"
                            name="submit">Simpan</button>
                            <button type="reset" class="btn reset" id="reset"
                                name="reset" onclick="hapus()">Reset</button>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
</body>

</html>
