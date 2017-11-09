<?php
 
if(isset($_POST["go"])){
    $e1=null;
    $login=trim($_POST["login"]);
    $login=strip_tags($login); // вырезаем теги
        //конвертируем специальные символы в мнемоники HTML
    $login=htmlspecialchars($login,ENT_QUOTES);
        
    $login=stripslashes($login);
    if(strlen($login)=="0"){
        $e1.="<span style='color:red'>Заполните поле 'Логин'</span><br>";
    };
    
    
    $e2=null;
    $pass=trim($_POST["pass"]);
    $pass=strip_tags($pass);
    $pass=htmlspecialchars($pass,ENT_QUOTES);
    $pass=stripslashes($pass);
    if(strlen($pass)=="0"){
        $e2.="<span style='color:red'>Заполните поле 'Пароль'</span><br>";
    };
    
    
    $e3=null;
    $email=trim($_POST["email"]);
    $email=strip_tags($email);
    $email=htmlspecialchars($email,ENT_QUOTES);
    $email=stripslashes($email);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $e3.="<span style='color:red'>Заполните поле 'Email'</span><br>";
    };
    
    
    $eEn=$e1.$e2.$e3;
    
    if($eEn==null){
        
     $users = 'text.txt';
        $file=fopen($users,'a+'); // открываем файл, если его нет, то создаем его

     while($line=fgets($file, 128)) // читаем построчно
     {
        $readlogin=substr($line,0,strpos($line,':')); // Возвращает подстроку и  Возвращает позицию первого вхождения подстроки
        // if($readname == $name) // делаем проверку
        // {
        //     echo "<div class='container text-center'><h3><span style='color:black;'>Такой логин уже используется!</span></h3></div>";
        //     return false;
        // }
     }
    // добавление нового пользователя
     $line=$login.':'.md5($pass).':'.$email."\r\n";
     fputs($file,$line);
     fclose($file);
    // return true;
      
     
        // выводим уведомление об успехе операции и перезагружаем страничку
        print "<script language='Javascript' type='text/javascript'>
        <!--
        alert ('Вы успешно зарегистрированы! Спасибо!');
        function reload(){location = 'day5.php'}; 
        setTimeout('reload()', 0);
        -->
        </script>";
    };
    
};
?>