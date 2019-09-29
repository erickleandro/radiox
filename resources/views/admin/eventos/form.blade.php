@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Cadastrar Evento
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li><a href="{{ route('musica') }}"><i class="fa fa-group"></i> Evento</a></li>
	        <li class="active">Cadastrar Evento</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">Cadastrar Evento</h3>
	              <br>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
            		<ul id="errors" style="padding-left: 0"></ul>	
					<form id="form" enctype="multipart/form-data">
						@if ($evento)
							<input type="hidden" name="id" value="{{ $evento->id }}">
						@endif
						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Nome da música">Artista</label>
						  	<input type="text" name="artista" class="form-control" @if ($evento) value="{{ $evento->artista }}" @endif>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Data">Data</label>
						  	<input type="date" name="data" class="form-control" id="data" @if ($evento) value="{{ $evento->data }}" @endif>
						  </div>
						</div>
						<div class="col-md-12">
						  <div class="form-group">
						  	<label for="Local">Local</label>
						  	<input type="text" name="local" class="form-control" id="local" @if ($evento) value="{{ $evento->local }}" @endif>
						  </div>
						</div>
	            </div>
	            <div class="box-footer">
                	<button type="submit" class="btn btn-primary">
                		@if ($evento)
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
			@if ($evento)
				ajax("{{ route('atualizar-evento', $evento->id) }}", 'POST', '#form', "{{ route('evento') }}");
			@else
				ajax("{{ route('registrar-evento') }}", 'POST', '#form', "{{ route('evento') }}");	
			@endif
		});
	});
</script>
@endpush