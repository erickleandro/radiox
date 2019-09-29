@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Cadastrar Estilo Musical
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li><a href="{{ route('estilo-musical') }}"><i class="fa fa-group"></i> Estilo Musical</a></li>
	        <li class="active">Cadastrar Estilo Musical</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">Cadastrar Estilo Musical</h3>
	              <br>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
            		<ul id="errors" style="padding-left: 0"></ul>	
					<form id="form" enctype="multipart/form-data">
						@if ($estilo)
							<input type="hidden" name="id" value="{{ $estilo->id }}">
						@endif

						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Nome do Estilo">Nome do Estilo</label>
						  	<input type="text" name="nome" class="form-control" @if ($estilo) value="{{ $estilo->nome }}" @endif>
						  </div>
						</div>
	            </div>
	            <div class="box-footer">
                	<button type="submit" class="btn btn-primary">
                		@if ($estilo)
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
			@if ($estilo)
				ajax("{{ route('atualizar-estilo-musical', $estilo->id) }}", 'POST', '#form', "{{ route('estilo-musical') }}");
			@else
				ajax("{{ route('registrar-estilo-musical') }}", 'POST', '#form', "{{ route('estilo-musical') }}");	
			@endif
		});
	});
</script>
@endpush