<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
        <a class="btn btn-primary"href="/welcome">Home</a>
        <a class="btn btn-success" href="/contact">Contact</a><br>
        <b>Name:Tanvir Ahmmed</b><br>
        <b>012345678<b/><br>
        <b>tanvir@gmail.com<b/>
        <h1>{{$Name}}</h1>

    <table>
    @foreach($member as $n)
    <tr><td>{{$n}} </td></tr>

    @endforeach
    </table>
   </body>
</html>