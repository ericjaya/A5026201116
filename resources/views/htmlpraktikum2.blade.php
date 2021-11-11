<!DOCTYPE html>
<html>

<head>
    <title>Praktikum Form Validation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>

        function validateFormName() {
            let a = document.getElementById("name").value;
            const regexp = /\d/;
            const b = regexp.test(document.getElementById("name").value);

            if (a == "") {
                $("#petunjuknama").text("Anda belum memasukkan nama");
                return false;
            } else if (b === true) {
                $("#petunjuknama").text("Nama tidak boleh mengandung angka");
                return false;
            } else {
                $("#petunjuknama").text("");
                return true;
            }
        }

        function validateFormAddress() {
            let c = document.getElementById("address").value;

            if (c == "") {
                $("#petunjukaddress").text("Anda belum memasukkan address");
                return false;
            } else {
                $("#petunjukaddress").text("");
                return true;
            }
        }

        function validateFormEmail() {
            let d = document.getElementById("email").value;
            const regexemail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            const e = regexemail.test(document.getElementById("email").value);

            if (d == "") {
                $("#petunjukemail").text("Anda belum memasukkan email");
                return false;
            } else if (e === false) {
                $("#petunjukemail").text("Format email salah: harus mengandung karakter @");
                return false;
            } else {
                $("#petunjukemail").text("");
                return true;
            }
        }

        function validateFormPassword() {
            let f = document.getElementById("password").value;
            const regexpwmin = /^.{8,}$/;
            const g = regexpwmin.test(document.getElementById("password").value);
            const regexpwmax = /^.{0,16}$/;
            const h = regexpwmax.test(document.getElementById("password").value);

            if (f == "") {
                $("#petunjukpassword").text("Anda belum memasukkan password");
                return false;
            } else if (g === false) {
                $("#petunjukpassword").text("Password terlalu pendek, masukkan password deng panjang 8-16 digit");
                return false;
            } else if (h === false) {
                $("#petunjukpassword").text("Password terlalu panjang, masukkan password deng panjang 8-16 digit");
                return false;
            } else {
                $("#petunjukpassword").text("");
                return true;
            }
        }

        function validateFormTelephone() {
            let i = document.getElementById("telephone").value;
            const regextp = /^.{7,}$/;
            const j = regextp.test(document.getElementById("telephone").value);

            if (i == "") {
                $("#petunjuktelephone").text("Anda belum memasukkan telephone");
                return false;
            } else if (j === false) {
                $("#petunjuktelephone").text("Nomor telephone terlalu pendek, masukkan telephone dengan panjang minimal 7 digit");
                return false;
            } else {
                $("#petunjuktelephone").text("");
                return true;
            }
        }

        function validateFormCourse() {
            let k = document.getElementById("course").value;

            if (k == "") {
                $("#petunjukcourse").text("Anda belum memilih course");
                return false;
            } else {
                $("#petunjukcourse").text("");
                return true;
            }
        }

        function validateFormZipcode() {
            let l = document.getElementById("zipcode").value;
            const regexzc = /^.{6}$/;
            const m = regexzc.test(document.getElementById("zipcode").value);

            if (l == "") {
                $("#petunjukzipcode").text("Anda belum memasukkan zipcode");
                return false;
            } else if (m == false) {
                $("#petunjukzipcode").text("Zipcode harus 6 digit");
                return false;
            } else {
                $("#petunjukzipcode").text("");
                return true;
            }
        }

    </script>
    <style>
        h1 {
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        label, button {
            font-family: 'Poppins', sans-serif;
        }

        p {
            font-family: 'Poppins', sans-serif;
            color: red;
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
        <h1><b>Registration Form</b></h1>
        <form name="form" action="https://www.its.ac.id/"
            onsubmit="return validateFormName() && validateFormAddress() && validateFormEmail() && validateFormPassword() && validateFormTelephone() && validateFormCourse() && validateFormZipcode()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" oninput="validateFormName()">
                <p id="petunjuknama"></p>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" oninput="validateFormAddress()">
                <p id="petunjukaddress"></p>
            </div>
            <div class="form-group">
                <label for="email">E-mail Address:</label>
                <input type="email" class="form-control" id="email" name="email" oninput="validateFormEmail()">
                <p id="petunjukemail"></p>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password"
                    oninput="validateFormPassword()">
                <p id="petunjukpassword"></p>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="number" class="form-control" id="telephone" name="telephone"
                    oninput="validateFormTelephone()">
                <p id="petunjuktelephone"></p>
            </div>
            <div class="form-group">
                <label for="course">Select Your Course</label>
                <select class="form-control" id=course name="course" oninput="validateFormCourse()">
                    <option> </option>
                    <option>BTECH</option>
                    <option>BBA</option>
                    <option>BCA</option>
                    <option>B.COM</option>
                    <option>GEEKSFORGEEKS</option>
                </select>
                <p id="petunjukcourse"></p>
            </div>
            <div class="form-group">
                <label for="zipcode">Zipcode:</label>
                <input type="number" class="form-control" id="zipcode" name="zipcode" oninput="validateFormZipcode()">
                <p id="petunjukzipcode"></p>
            </div>
            <button type="submit" class="btn btn-outline-primary" id="submit" name="submit">Send</button>
            <button type="reset" class="btn btn-outline-primary" id="reset" name="reset">reset</button>
        </form>
    </div>
</body>

</html>
