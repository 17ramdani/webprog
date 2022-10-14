<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="database.css">

    <title>CRUD</title>
</head>
<body>
    <nav class="navbar text-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">CRUD OOP PHP</span>
        </div>
    </nav>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%"
            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <h3>Login</h3>
    <div class="container form">
    <form method="POST" action="inputdata.php?action=login">
    <table>
            <tr>
                <td>USERNAME</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td>:</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol" value="LOGIN"></td>
            </tr>
        </table>
    </form>
    </div>   
    
</body>
</html>