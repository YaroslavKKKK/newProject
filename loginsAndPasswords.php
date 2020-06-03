<?php
    include_once "actionWithDB.php";

    print ("<p align=center><font face=verdana><b>Логины и пароли пользователей</b><br>
            <table border=1 align=center width=65% cellpadding=3>
            <tr bgcolor=#ffffcc>
                <td>id регистрации</td>
                <td>Логин</td>
                <td>Пароль</td>
            </tr>");

    $result = $link->query("SELECT `idAutorization`, `login`, `password` from enter_in_system.autorization");
    while ($row = $result->fetch())
    {
        $id = $row['idAutorization'];
        $login = $row['login'];
        $password = $row['password'];

        if ($login != null or $password != null) {
            print("<tr bgcolor='#deb887'>
                        <td>$id</td>
                        <td>$login</td>
                        <td>$password</td>
                   </tr>");
        }
    }


