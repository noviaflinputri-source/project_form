<?php
$firstname = $_POST['firstname'] ?? '';
$lastname  = $_POST['lastname'] ?? '';
$phone     = $_POST['phone'] ?? '';
$address   = $_POST['address'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 40px;
        }

        .container {
            width: 600px;
            margin: auto;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        textarea {
            height: 100px;
        }

        .btn {
            display: block;
            margin: 15px auto;
            padding: 8px 20px;
            border-radius: 20px;
            border: none;
            background-color: #5aa9e6;
            color: white;
            cursor: pointer;
        }

        .hasil {
            margin-top: 30px;
        }

        .reset {
            margin-top: 10px;
            display: inline-block;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- FORM -->
    <form method="POST">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>

        <button class="btn">Submit</button>
    </form>

    <!-- HASIL -->
    <?php if ($firstname): ?>
    <div class="hasil">
        <p><b>Hi, my name is <?php echo $firstname . " " . $lastname; ?></b></p>
        <p>Phone Number : <?php echo $phone; ?></p>
        <p>Address : <?php echo $address; ?></p>

        <a href="index.php" class="reset">Reset</a>
    </div>
    <?php endif; ?>

</div>

</body>
</html>