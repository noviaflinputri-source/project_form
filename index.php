<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff5f6d, #ffc371);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            padding: 30px;
            width: 320px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 8px;
            background: #f1f1f1;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 20px;
            background: #ff5f6d;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #e14b5a;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Input Data</h2>
    <form action="proses.php" method="POST">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>