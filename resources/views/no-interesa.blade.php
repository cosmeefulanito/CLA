@extends('layouts')

@section('title')

Pagina Login

@stop

@section('content')

<section>
	<div class="tarjeta">
		<div class="titulo">			
				<div>¿ Cuáles son las razones por las que no le interesa el seguro ?</div>
		</div>
		<div class="cuerpo">
			<div class="lista-razones">
				<ol>
					<li>Los beneficios que otorga no son interesantes</li>
					<li>No me gusta el pago de prima anual</li>
					<li>Prefiero contratar un seguro con un ejecutivo</li>
					<li>Otro
						<textarea></textarea>
					</li>
				</ol>				
			</div>
			<hr>
			<p>
				<strong>Consejo sobre los seguros: </strong> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', 
			</p>
		</div>
	</div>
</section>


@stop