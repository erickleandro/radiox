@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Cadastrar Foto
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li><a href="{{ route('musica') }}"><i class="fa fa-group"></i> Foto</a></li>
	        <li class="active">Cadastrar Foto</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">Cadastrar Foto</h3>
	              <br>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
            		<ul id="errors" style="padding-left: 0"></ul>	
					<form id="form" enctype="multipart/form-data">
						@if ($foto)
							<input type="hidden" name="id" value="{{ $foto->id }}">
						@endif
						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Nome da música">Título</label>
						  	<input type="text" name="nome" class="form-control" @if ($foto) value="{{ $foto->nome }}" @endif>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Foto">Foto</label>
						  	<input type="file" name="arquivo" class="form-control" id="arquivo">
						  </div>
						  @if ($foto && $foto->arquivo)
						  	<div class="form-group">
						  		<img src="{{ asset("storage/{$foto->arquivo}") }}">	
						  	</div>
						  @endif
						</div>
	            </div>
	            <div class="box-footer">
                	<button type="submit" class="btn btn-primary">
                		@if ($foto)
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
			@if ($foto)
				ajax("{{ route('atualizar-foto', $foto->id) }}", 'POST', '#form', "{{ route('foto') }}");
			@else
				ajax("{{ route('registrar-foto') }}", 'POST', '#form', "{{ route('foto') }}");	
			@endif
		});
	});
</script>
@endpush