<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>

body {
    font-family: 'Poppins', sans-serif;
    background-color: #dee9fa;
}

        /* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: white;
  padding: 10px 10px;
  background: #3c50e0;
  box-shadow: 10px 10px 13px 1px rgba(0,0,0,0.24);
-webkit-box-shadow: 10px 10px 13px 1px rgba(0,0,0,0.24);
-moz-box-shadow: 10px 10px 13px 1px rgba(0,0,0,0.24);
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

.sidenav {
  width: 130px;
  position: fixed;
  z-index: 1;
  top: 150px;
  left: 20px;
  background: #3c50e0;
  overflow-x: hidden;
  padding: 8px 0;
  border-radius: 15%;
  box-shadow: 10px 10px 13px -6px rgba(0,0,0,0.24);
-webkit-box-shadow: 10px 10px 13px -6px rgba(0,0,0,0.24);
-moz-box-shadow: 10px 10px 13px -6px rgba(0,0,0,0.24);
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 18px;
  color: #dee9fa;
  display: block;
}

.sidenav a:hover {
  color: #8aa4cc;
}

.main {
  margin-left: 200px; /* Same width as the sidebar + left position in px */
  font-size: 18px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.table {
    width: 90%;
}

.maintable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3c50e0;
  color: white;
}

.maintable, th, td {
  border: 1px solid black;
}

.table-borderless, th, td, tr {
    border-collapse: collapse;
    border: 0px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

h1 {
    color: white;
}

.subjudul {
    margin-left: 210px;
    margin-top: 30px;
    color: black;
}

img {
    border-radius: 100%;
    margin-left:10px;
    margin-right:10px;
}

footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:30px;   /* Height of the footer */
   padding-right: 120px;
   text-align: right;
}

.submit {
    background-color: #3c50e0;
    text: white;
}

        </style>
</head>
<body>
    <div class="container-flex">
    <div class="row">
        <div class="header" id="myHeader">
            <a class="logo"><img src="{{URL::asset('/images/eric.jpg')}}" alt="profile Pic" height="80" width="80"></a>
            <div class="header-center">
                <h1>Eric Jaya Aziz - 5026201116</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <h1 class='subjudul'>@yield('subjudul')</h1>

    <div class="sidenav">
        <a href="pegawai">Pegawai</a>
        <a href="absen">Absen</a>
        <a href="tugas">Tugas</a>
        <a href="kaos">Kaos</a>
    </div>

    <div class="main">
        @yield('konten')
    </div>
    </div>
</div>

<footer>
    Hak Cipta oleh 5026201116 - Eric Jaya Aziz
  </footer>

</body>
</html>
