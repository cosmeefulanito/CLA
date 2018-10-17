@extends('layouts')

@section('title')

Pagina Login

@stop

@section('content')

<section>
	<div class="tarjeta">
		<div class="titulo">			
				<div>¡Último paso!</div>
		</div>
		<div class="cuerpo">
			<p>La prima anual de este seguro es de 15.000.</p>
			<div>¿Cuál prefieres que sea el medio de pago?</div>
			<small>*Recuerda que no estás contratando el seguro y esto es sólo una simulación.</small>
			<hr>

			<div class="btn-group text-center">
				<!-- <a href="" class="btn-pago">Tarjeta de crédito</a> -->
				<a class="btn-pago credito">Tarjeta de crédito</a>
				<a class="btn-pago planilla">Descuento por planilla</a>
			</div>				
			</div>
		</div>
	</div>
</section>


@stop