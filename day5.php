<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Солошенко А.Г. web 11016</title>
    <style>
    .col-sm-6{
        padding-left: 100px !important;
    }
        .form-control {
            width: 300px !important;
        }
        
        .well {
            margin-top: 10%;
            width:350px; 
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css"> </head>

<body style="background-color: #597DA3">
    <div class="row">

        <div class="col-sm-6 col-sm-offset-4">
            <div class="well">
                <h4>Регистрация</h4>

<?php
 include "send.php";

?>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="login">Логин:</label>
                        <input type="text" class="form-control" name="login" value="<?=@$login;?>">
                        <span class="error"><?=@$e1;?></span>
                      
                         </div>
                    <div class="form-group">
                        <label for="pass">Пароль:</label>
                        <input type="password" class="form-control" name="pass" value="<?=@$pass;?>">
                        
                        <span class="error"><?=@$e2;?></span>
                         </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" name="email" value="<?=@$email;?>">
                        <span class="error"><?=@$e3;?></span>
                         </div>

                        
                    <button type="submit" class="btn btn-primary" name="go">Зарегистрироваться</button>
                    <button type="reset" class="btn btn-default" name="clear">Очистить</button>
                </form>
            </div>
        </div>
    </div>
    
    
    
</body>

</html>