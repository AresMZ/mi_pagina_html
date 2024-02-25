<!DOCTYPE html>
<html>
<head>
        <title>Inicio de sesión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
                body {
                        background-color: #f2f2f2;
                }
                .login-form {
                        margin-top: 50px;
                        margin-bottom: 50px;
                        padding: 50px;
                        background-color: #ffffff;
                        border-radius: 10px;
                        box-shadow: 0px 0px 10px #888888;
                }
                .login-form h2 {
                        margin-top: 0px;
                        margin-bottom: 20px;
                        text-align: center;
                }
                .form-group {
                        margin-bottom: 20px;
                }
                .form-control {
                        height: 40px;
                        border-radius: 20px;
                }
                .btn {
                        border-radius: 20px;
                        background-color: #4CAF50;
                        color: #ffffff;
                        font-size: 16px;
                        font-weight: bold;
                        padding: 10px 20px;
                        border: none;
                        width: 100%;
                        margin-top: 20px;
                }
                .btn:hover {
                        background-color: #3e8e41;
                }
        </style>
</head>
<body>
        <div class="container">
                <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                                <form class="login-form" method="POST" action="login.php">
                                        <h2>Iniciar sesión</h2>
                                        <div class="form-group">
                                                <label for="username">E-mail:</label>
                                                <input type="email" class="form-control" name="email" placeholder="Introduce tu correo electrónico">
                                        </div>
                                        <div class="form-group">
                                                <label for="password">Contraseña:</label>
                                                <input type="password" class="form-control" name="password" placeholder="Introduce tu contraseña">
                                        </div>
                                        <button type="submit" class="btn">Iniciar sesión</button>
                                </form>
                        </div>
                </div>
        </div>
</body>
</html>
