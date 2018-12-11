@extends("layouts.mainud6")

@section("content")

  <?php
    date_default_timezone_set('Europe/Madrid');
    $now = date('Y/m/j H:i:s');
    $fechamargen = strtotime ( '-15 minute' , strtotime ( $now ) ) ;
    $fechavista = date ( 'Y/m/j H:i:s' , $fechamargen );
   ?>
   <h3>Mensajes enviados</h3>

  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>To</th>
        <th>Message</th>
        <th>Fecha/Hora</th>
        <th style="width:15px"></th>
        <th style="width:15px"></th>
        <th style="width:15px"></th>
      </tr>
      </thead>
    <tbody>
      <!-- Aqui va el 1 -->

    </tbody>
    </table>

    <h3>Mensajes recibidos</h3>

    <table class="table table-condensed">
      <thead>
        <tr>
          <th>Id</th>
          <th>From</th>
          <th>Message</th>
          <th>Fecha/Hora</th>
          <th style="width:15px"></th>
          <th style="width:15px"></th>
          <th style="width:15px"></th>
        </tr>
        </thead>
      <tbody>
        <!-- Aqui va el 2 -->
        
      </tbody>
      </table>

@endsection
