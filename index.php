<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KASIR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #000000;
            font-family: 'Arial', Times, serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 600px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            justify-content: space-between;
        }

        .right-section {
            flex: 1;
            padding: 30px;
        }

        .form-container {
            max-width: 400px;
            margin: auto;
        }

        .tulisan_login {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }

        .form_login {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .tombol_login {
            background: #007bff;
            color: #fff;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="right-section">
            <div class="form-container">
                <h4 class="tulisan_login"><b>SILAHKAN LOGIN</b></h4><br>
                <?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal"){
                        echo "<div class='alert alert-danger text-center'>Username dan Password tidak sesuai!</div>";
                    }
                }
                ?>
                <form action="cek_login.php" method="post" autocomplete="off">
                    <label>Username</label>
                    <input type="text" name="username" class="form_login" required="required">

                    <label>Password</label>
                    <input type="password" name="password" class="form_login" required="required">

                    <input type="submit" class="tombol_login" value="Login">
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
