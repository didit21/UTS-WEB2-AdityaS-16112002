<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-size: 12pt;
                margin: 0;
            }
            table{
                margin: 0 auto;
                margin-top: 15%;
                background-color: #217;
                -webkit-border-radius: 10px 10px 10px 10px;
                color: #fff;
                font-size: 10pt;
                font-family: 'courier new';
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                <form>
                    <table>
                        <tr>
                            <td colspan="3" align="center">LOGIN SITES</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><input type="text" name="user"></input><br></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="pass"></input></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="right"><input type="submit" value="Login"></input></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">Login Area For Show The Websites</td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
