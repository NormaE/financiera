<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Prestamos</title>
  </head>
  <body>
    <h1>Prestamos de la financiera</h1>
    </br>
    <div class="links">
                    <a href="http://127.0.0.1:8000/">HOME</a>
                    </br>
                    <a href="http://127.0.0.1:8000/clientes">Clientes</a>
                    </br>
                    <a href="http://127.0.0.1:8000/pago">Pagos Realizados</a>
                    </br>
                    <a href="http://127.0.0.1:8000/resumen">Resumen de Pagos</a>
                    
                </div>
                </br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Cliente</th>
      <th scope="col">Cantidad</th>
      <th scope="col">No de pagos</th>
      <th scope="col">Cuota</th>
      <th scope="col">Total a pagar</th>
      <th scope="col">Fecha ministracion</th>
      <th scope="col">Fecha vencimiento</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($pres as $item)
    <tr>
      <th scope="row"> {{$item->id}}</th>
      <td>{{$item->Cliente}}</td>
      <td>{{$item->Cantidad}}</td>
      <td>{{$item->No_de_pagos}}</td>
      <td>{{$item->Cuota}}</td>
      <td>{{$item->Total_a_pagar}}</td>
      <td>{{$item->Fecha_ministration}}</td>
      <td>{{$item->Fecha_vencimiento}}</td>
      <td>@fat</td>
    </tr>
    @endforeach()
  </tbody>
</table>

<style > 
 body{

       background-image: url("data:image/jpeg;base64,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"); 
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