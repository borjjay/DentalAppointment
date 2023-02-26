<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

     
         <link rel="stylesheet" href={{asset('./app.css')}}>
        <title>DentalAppointment</title>
    </head>
    <body>
       <div class='mainContainer'>
       @yield('navBar')
       <h1> Hello </h1>
       </div>
    </body>



    <script type="module" src={{asset("./main.js")}}></script>
</html>
