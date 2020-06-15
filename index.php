<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="Script.php" method="post" target="_self">
            <table align="center" bgcolor="#b8860b" width="60%">
                <tr>
                    <th>
                    <td>User</td>
                    <td>Task's title</td>
                    <td>Status</td>
                    <td>Date of changes</td>
                </tr>
                <tr>
                    <th>
                    <td>Your nickname</td>
                    <td><input type="text" maxlength="20" name="Title"></td>
                    <td>
                        <select name="Status">
                            <option selected value="active">Active</option>
                            <option value="passive">Passive</option>
                            <option value="close">Close</option>
                            <option value="deleted">Deleted</option>
                        </select>
                    </td>
                    <td>Now date</td>
                </tr>
            </table>
            <button type="submit" value="create">Create new task</button>
        </form>
</body>
</html>


