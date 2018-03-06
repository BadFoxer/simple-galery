<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Image uploader</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
<center>
    <form action="" method="POST"  enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" >
        <input type="submit" name="submit" value="Upload">
    </form></br></br></br>
    <a href="galery">Go to galery</a>

</center>
    </body>
</html>
