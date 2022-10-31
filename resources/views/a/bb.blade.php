<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('css/123.css')}}">
</head>
<body>
    <div class="asd">
        AAA
    </div>    

    {{__('messaeges.hello gus')}}
    <br>
    ==================================
    <br>
    {{__('notes.note')}}
    <br>

    ======================================================================================================================================================

    <?php
        $var = 0;
    ?>
    
    
    @include('iii.part')
    

    @yield('tab')








</body>
</html>