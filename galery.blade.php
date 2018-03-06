<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Foxo galerija</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>

  {{-- start loop get all image names from data base --}}
 @foreach($img as $pic)
 {{-- print out images path with image name from database work in laravel 5.6 --}}
<img src="{{url('storage/upload/'.$pic->image) }}" alt="{{$pic->image}}" title="" height="200" width="220" /> 
{{--end loop--}}
@endforeach
<center>
</br></br> 
 <a href="/">Back to Upload</a>
 </center>
    </body>
</html>

