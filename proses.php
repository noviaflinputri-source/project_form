<<<<<<< HEAD
<?php

class Mahasiswa {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->address = $address;
    }

    function tampilData() {
        echo "<p>Hi, my name is <b>$this->firstname $this->lastname</b></p>";
        echo "<p>Phone Number: $this->phone</p>";
        echo "<p>Address: $this->address</p>";
    }
}

$data = new Mahasiswa(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['phone'],
    $_POST['address'
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 30px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .btn {
            margin-top: 15px;
            padding: 6px 15px;
            border-radius: 20px;
            border: none;
            background-color: #4da3ff;
            color: white;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2d8cf0;
        }

    </style>
</head>
<body>

<div class="card">
    <?php $data->tampilData(); ?>

    <form action="index.php">
        <button class="btn">Reset</button>
    </form>
</div>

</body>
=======
<?php

class Mahasiswa {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->address = $address;
    }

    function tampilData() {
        echo "<p>Hi, my name is <b>$this->firstname $this->lastname</b></p>";
        echo "<p>Phone Number: $this->phone</p>";
        echo "<p>Address: $this->address</p>";
    }
}

$data = new Mahasiswa(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['phone'],
    $_POST['address'
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 30px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .btn {
            margin-top: 15px;
            padding: 6px 15px;
            border-radius: 20px;
            border: none;
            background-color: #4da3ff;
            color: white;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2d8cf0;
        }

    </style>
</head>
<body>

<div class="card">
    <?php $data->tampilData(); ?>

    <form action="index.php">
        <button class="btn">Reset</button>
    </form>
</div>

</body>
>>>>>>> 6036727fa5ca6bb2361b94adb5395dd5e118cc14
</html>