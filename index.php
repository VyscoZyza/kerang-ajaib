<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Puja Kerang Ajaib</title>
</head>
<style>
    .image {

        background-image: url("kerang.jpg");
        background-color: #cccccc;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 30%;
    }

    .container {
        position: relative;
        text-align: center;
        color: white;
    }

    body {
        background: black !important;
        height: 100%;
        width: 100%;
    }
</style>

<body>

    <h1 class="text-center text-white">Puja Kerang Ajaib</h1>
    <div class="container">
        <img src="kerang.png" style="width: 40%;" alt="puja" class=" rounded mx-auto d-block">
    </div>

    <h1 id="Ask" class="text-center text-primary">
    </h1>
    <?php
    $a = array("Tidak Ada", "Silahkan", "Tidak Boleh", "Jangan", "Iya deh", "OK", "Coba Lagi");
    $random_keys = array_rand($a);
    ?>
    <!-- <h1 class="text-center"><?php echo $a[$random_keys] . "<br>"; ?></h1> -->
    <button id="button" class="btn btn-primary center mb-1" onclick="Ask()">
        Tarik
    </button>

</body>
<script>
    var ask = document.getElementById('Ask');

    var arr = ["Tidak Ada", "Silahkan", "Tidak Boleh", "Jangan", "Iya deh", "OK", "Coba Lagi"];

    function Ask() {
        var value = arr[Math.floor(Math.random() * arr.length)];
        ask.innerHTML = value;
        var msg = new SpeechSynthesisUtterance(value);
        window.speechSynthesis.speak(msg);
        setTimeout(function() {
            ask.innerHTML = "";
        }, 3000);
    }
</script>

</html>
