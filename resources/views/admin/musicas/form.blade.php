@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Cadastrar Música
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li><a href="{{ route('musica') }}"><i class="fa fa-group"></i> Música</a></li>
	        <li class="active">Cadastrar Música</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">Cadastrar Música</h3>
	              <br>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
            		<ul id="errors" style="padding-left: 0"></ul>	
					<form id="form" enctype="multipart/form-data">
						@if ($musica)
							<input type="hidden" name="id" value="{{ $musica->id }}">
						@endif

						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Artista">Artista</label>
						  	<input type="text" name="artista" class="form-control" @if ($musica) value="{{ $musica->artista }}" @endif>
						  </div>
						</div>

						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Nome da música">Nome do música</label>
						  	<input type="text" name="nome" class="form-control" @if ($musica) value="{{ $musica->nome }}" @endif>
						  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label for="Estilo Musical">Estilo Musical</label>
							  <select name="estilo_musical_id" class="form-control" data-placeholder="Selecione o estilo musical"
							          style="width: 100%;">
							    @if (count($estilos_musicais))
									@foreach ($estilos_musicais as $estilo)
										<option value="{{ $estilo->id }}" 
											@if ($musica and $musica->estilo_musical_id == $estilo->id)
											selected="true" 
											@endif
										>{{ $estilo->nome }}</option>
									@endforeach
								@endif
							  </select>
							</div>
						</div>
						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Arquivo MP3">Arquivo MP3</label>
						  	<input type="file" name="arquivo" class="form-control" id="arquivo">
						  </div>
						  @if ($musica && $musica->arquivo)
						  	<div class="form-group">
						  		<audio controls="">
						  			<source src="{{ asset("storage/{$musica->arquivo}") }}" type="audio/mp3">
						  		</audio>
						  	</div>
						  @endif
						</div>
	            </div>
	            <div class="box-footer">
                	<button type="submit" class="btn btn-primary">
                		@if ($musica)
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
		$("#form").on('submit', function (e) {
			e.preventDefault();
			@if ($musica)
				ajax("{{ route('atualizar-musica', $musica->id) }}", 'POST', '#form', "{{ route('musica') }}");
			@else
				ajax("{{ route('registrar-musica') }}", 'POST', '#form', "{{ route('musica') }}");	
			@endif
		});
	});
</script>
@endpush