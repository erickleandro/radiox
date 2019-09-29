@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Cadastrar Locutor
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li><a href="{{ route('locutor') }}"><i class="fa fa-group"></i> Locutores</a></li>
	        <li class="active">Cadastrar Locutor</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">Cadastrar Locutor</h3>
	              <br>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
            		<ul id="errors" style="padding-left: 0"></ul>	
					<form id="form" enctype="multipart/form-data">
						@if ($locutor)
							<input type="hidden" name="id" value="{{ $locutor->id }}">
						@endif

						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Nome do Locutor">Nome do locutor</label>
						  	<input type="text" name="nome" class="form-control" @if ($locutor) value="{{ $locutor->nome }}" @endif>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Facebook">Facebook</label>
						  	<input type="text" name="facebook" class="form-control" @if ($locutor) value="{{ $locutor->facebook }}" @endif>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Twitter">Twitter</label>
						  	<input type="text" name="twitter" class="form-control" @if ($locutor) value="{{ $locutor->twitter }}" @endif>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Google Plus">Google Plus</label>
						  	<input type="text" name="googleplus" class="form-control" @if ($locutor) value="{{ $locutor->googleplus }}" @endif>
						  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label for="Estilo Musical">Estilo Musical</label>
							  <select id="estilo_musical" name="estilos[]" class="form-control select2" multiple="multiple" data-placeholder="Selecione os estilos musicais"
							          style="width: 100%;">
							    @if (count($estilos_musicais))
									@foreach ($estilos_musicais as $estilo)
										<option value="{{ $estilo->id }}"
											@if ($locutor && count($locutor->estilos))
												@foreach($locutor->estilos as $estilo_locutor)
													<option value="{{ $estilo->id }}" @if ($locutor && $estilo_locutor->id == $estilo->id) selected="true" @endif>{{ $estilo->nome }}</option>
												@endforeach											
											@endif
										>{{ $estilo->nome }}</option>
									@endforeach
								@endif
							  </select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label for="Programa">Programa</label>
							  <select id="programa" name="programa_id" class="form-control" data-placeholder="Selecione o programa"
							          style="width: 100%;">
							    <option value="">Selecione um programa</option>
							    @if (count($programas))
									@foreach ($programas as $programa)
									<option value="{{ $programa->id }}" @if ($locutor && $locutor->programa_id == $programa->id) selected="true" @endif>{{ $programa->nome }}</option>
									@endforeach
								@endif
							  </select>
							</div>
						</div>
						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Biografia">Biografia</label>
						  	<textarea class="form-control" name="biografia" rows="3">@if($locutor){{ $locutor->biografia }}@endif</textarea>
						  </div>
						</div>
						<div class="col-md-12">
						  <div class="form-group">
						  	<label for="foto">Foto</label>
						  	<input type="file" name="foto" class="form-control" id="foto">
						  </div>

						  @if ($locutor && $locutor->foto)
						  	<div class="form-group">
						  		<img src="{{ url("storage/{$locutor->foto}") }}">	
						  	</div>
						  @endif
						</div>
	            </div>
	            <div class="box-footer">
                	<button type="submit" class="btn btn-primary">
                		@if ($locutor)
							Atualizar
                		@else
							Cadastrar
                		@endif
                	</button>
              	</div>
              	</form>
	          </div>
	          <!-- /.box -->
	        </div>
	      </div>
	    </section>
	    <!-- /.content -->
	  </div>
@endsection

@push('js_footer')
<script type="text/javascript">
	$(function () {
		$("#estilo_musical").select2();
 
		$("#form").on('submit', function (e) {
			e.preventDefault();
			@if ($locutor)
				ajax("{{ route('atualizar-locutor', $locutor->id) }}", 'POST', '#form', "{{ route('locutor') }}");
			@else
				ajax("{{ route('registrar-locutor') }}", 'POST', '#form', "{{ route('locutor') }}");	
			@endif
		});
	});
</script>
@endpush