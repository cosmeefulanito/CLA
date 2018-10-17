@extends('layouts')

@section('title')

Pagina inicio

@stop

@section('content')

<section>
	<div class="tarjeta">
		<div class="titulo">			
				<div>Seguro de vida por Muerte Accidental</div>
		</div>
		<div class="cuerpo">
			<h3>producto</h3>
			<p>
				Proin feugiat aliquam tortor, id hendrerit urna semper pulvinar. Nullam iaculis aliquam risus, nec tempus quam condimentum ut. Proin nibh nisl, imperdiet non dictum quis, sodales quis risus. 
			</p>
			<h3>asistencia</h3>
			<p>1. Chequeo médico preventivo (copago 0)</p>
			<table>
			  <tr>
			    <th>Mujeres</th>
			    <th>Hombres</th>			    
			  </tr>
			  <tr>
			    <td>
			    	<ul>
			    		<li class="lista">Consulta medica inicial</li>
			    		<li class="lista">Mamografia y/o Eco tomografia mamaria</li>
			    		<li class="lista">Exámenes Médicos de Sangre</li>
			    		<li class="lista">Orientación médica telefónica</li>
			    	</ul>
			    </td>
			    <td>
			    	<ul>
			    		<li class="lista">Consulta medica inicial</li>
			    		<li class="lista">Antígeno prostático</li>
			    		<li class="lista">Exámenes Médicos de Sangre</li>
			    		<li class="lista">Orientación médica telefónica</li>
			    	</ul>
			    </td>			    
			  </tr>			
			</table>
			<p>2. Funerario</p>
			<p>Asistencia y coordinacion trámites funerarios.</p>
			<h3>tarifa</h3>
			<ul>
				<li>Prima UF 0,550</li>
				<li>Prima $ Aprox $15.000 por 12 meses</li>
			</ul>
			<div class="detalle-documentos">
				<div class="ver-detalle">
					<i class="far fa-file-pdf fa-2x"></i>
					Ver detalle
				</div>
				<div class="condiciones">
					<i class="far fa-file fa-2x"></i>
					Ver condiciones legales
				</div>
			</div>
			<hr>
			<div class="btn-home">				
				<button type="button" name="no-me-interesa" class="no-me-interesa" href="{{ url('no-interesado') }}">NO ME INTERESA</button>
				<button type="button" name="me-interesa" class="me-interesa" href="{{ url('login') }}">ME INTERESA</button type="button">			
			</div>
		</div>
	</div>
</section>

@stop