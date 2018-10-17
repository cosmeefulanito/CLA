@extends('layouts')

@section('title')

Pagina Login

@stop

@section('content')

<section>
	<div class="tarjeta">
		<div class="titulo">			
				<div>Indicanos tu RUT</div>
		</div>
		<div class="cuerpo">
			<div class="box-login">
				<form name="frmLogin" action="" method="POST">
					<input type="text" name="txtRut" placeholder="228889999">
					<p>Ingresa tu rut sin puntos ni guiones</p>

					<input type="password" name="txtClave" placeholder="****">
					<p>Ingresa tu clave</p>

					<!-- <a class="enviar" name="btn-enviar" href="#">ENVIAR</a> -->
					<button type="submit" class="enviar" name="btn-enviar" href="#">ENVIAR</button>
				</form>
			</div>			
		</div>
	</div>
</section>


@stop