<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Resumen</title>
  </head>
  <body>
    <h1>Resumen de la financiera</h1>

    </br>
    <div class="links">
                    <a href="http://127.0.0.1:8000/">HOME</a>
                    </br>
                    <a href="http://127.0.0.1:8000/clientes">Clientes</a>
                    </br>
                    <a href="http://127.0.0.1:8000/prestamos">Prestamos</a>
                    </br>
                    <a href="http://127.0.0.1:8000/pago">Pagos Realizados</a>
                    
                    
                </div>
                </br>

    <table class="table">
  <thead>
    <tr>
    <th scope="col">#id</th>
      <th scope="col">Cliente</th>
      <th scope="col">Monto ministrado</th>
      <th scope="col">Financiado</th>
      <th scope="col">Fecha ministracion</th>
      <th scope="col">Fecha vencimiento</th>
      <th scope="col">Cuota</th>
      <th scope="col">No de pagos</th>
      <th scope="col">Pagos Realizados</th>
      <th scope="col">Abonado</th>
      <th scope="col">Saldo Pendiente</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($resumenes as $item)
    <tr>
      <th scope="row"> {{$item->id}}</th>
      <td>{{$item->cliente}}</td>
      <td>{{$item->Monto_ministrado}}</td>
      <td>{{$item->Financiado}}</td>
      <td>{{$item->Fecha_ministration}}</td>
      <td>{{$item->Fecha_vencimiento}}</td>
      <td>{{$item->Cuota}}</td>
      <td>{{$item->No_de_pagos}}</td>
      <td>{{$item->Pagos_realizados}}</td>
      <td>{{$item->Abonado}}</td>
      <td>{{$item->Saldo_pendiente}}</td>
      <td>@mdo</td>
    </tr>
    @endforeach()
  </tbody>
</table>
<style > 
 body{

       background-image: url("https://static.vecteezy.com/system/resources/previews/000/575/721/non_2x/abstract-geometric-gray-and-white-background-vector-illustration-eps10.jpg"); 
            background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
         }
 </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>