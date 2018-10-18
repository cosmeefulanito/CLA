@extends('layouts')

@section('title')

Pagina Login

@stop

@section('content')

<section>
	<div class="tarjeta">
		<div class="titulo">			
				<div>¡ Gracias Luisa!</div>
		</div>
		<div class="cuerpo">
			<h3>producto</h3>
			<p>
				Proin feugiat aliquam tortor, id hendrerit urna semper pulvinar. Nullam iaculis aliquam risus, nec tempus quam condimentum ut. Proin nibh nisl, imperdiet non dictum quis, sodales quis risus. 
			</p>						
			<hr>
			<h3>nombre</h3>
			<p>Luisa Alejandra Casanueva Velásquez</p>

			<h3>fecha de nacimiento</h3>
			<div>
				<p>luisa.caanueva@gmail.com <span class="txt-editar">Editar</span></p>
			</div>
			<h3>telefono</h3>
			<div>
				<p>+56 9 88834923 <span class="txt-editar">Editar</span></p>
			</div>

			<hr>
			

			<div class="box-agregar">
				<p>*Recuerda que esto es sólo una simulación y los datos que ves no son reales</p>
				<p>Indicanos quién será tu beneficiario.</p>
				<button type="button" href="{{ url('login') }}"  class="btn-verde">AGREGAR BENEFICIARIO</button>
				<p>¿Qué es un beneficiario?</p>
			</div>
		</div>
	</div>
</section>


@stop