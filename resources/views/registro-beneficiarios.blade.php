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
							<label for="txtNombre">Ingresa el primer nombre</label>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<label for="txtNombre">Ingresa el apellido paterno</label>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<label for="txtNombre">Ingresa el rut sin puntos ni guiones</label>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<label for="txtNombre">Ingresa el parentesco con el beneficiario</label>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<label for="txtNombre">Ingresa el numero telefonico del beneficiario</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<label for="txtNombre">Ingresa el segundo nombre</label>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<label for="txtNombre">Ingresa el apellido materno</label>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<label for="txtNombre">Ingresa la fecha de nacimiento</label>
						</div>

						<div class="form-nombre">
							<input type="text" name="txtNombre" class="input">
							<label for="txtNombre">Ingresa el mail del beneficiario</label>
						</div>
					</div>
				</div>
			</form>			
			<hr>
			<div class="btn-group">
				<!-- <button type="button" class="btn-verde bene">AGREGAR MAS BENEFICIARIOS</button>
				<button type="button" class="btn-verde sig">SIGUIENTE</button> -->
				<button class="btn btn-info bene">AGREGAR MAS BENEFICIARIO</button>
				<button type="submit" class="btn btn-info sig">SIGUIENTE</button>
				
			</div>
		</div>
	</div>
</section>


@stop