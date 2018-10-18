@extends('layouts')

@section('title')

Pagina Login

@stop

@section('content')

<section>
	<div class="tarjeta">
		<div class="titulo">			
				<div>Registro de Beneficiarios</div>
		</div>
		<div class="cuerpo">
			<h3>beneficiario 1</h3>
			<form name="frmBenef" action="{{url('pago')}}" method="POST" class="formBeneficiarios">
				<div class="row">

					<div class="col-6">						
						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<p>Ingresa el primer nombre</p>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<p>Ingresa el apellido paterno</p>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<p>Ingresa el rut sin puntos ni guiones</p>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<p>Ingresa el parentesco con el beneficiario</p>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<p>Ingresa el numero telefonico del beneficiario</p>
						</div>
					</div>
					<div class="col-6">
						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<p>Ingresa el segundo nombre</p>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<p>Ingresa el apellido materno</p>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<p>Ingresa la fecha de nacimiento</p>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<p>Ingresa el mail del beneficiario</p>
						</div>
					</div>
				</div>
			</form>			
			<hr>
			<div class="btn-group">
				<!-- <button type="button" class="btn-verde bene">AGREGAR MAS BENEFICIARIOS</button>
				<button type="button" class="btn-verde sig">SIGUIENTE</button> -->
				<button class="btn-verde bene">
					<i class="fas fa-plus-circle fa-2x" style="display: table;float: left;"></i>AGREGAR MAS BENEFICIARIOS
				</button>
				<button type="submit" class="btn-verde sig">SIGUIENTE</button>
				
			</div>
		</div>
	</div>
</section>


@stop