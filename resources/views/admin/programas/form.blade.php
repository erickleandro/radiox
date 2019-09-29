@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>

	        @if ($programa)Atualizar @else Cadastrar @endif Programa
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li><a href="{{ route('programa') }}"><i class="fa fa-group"></i> Programas</a></li>
	        <li class="active">@if ($programa)Atualizar @else Cadastrar @endif Programa</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">@if ($programa)Atualizar @else Cadastrar @endif Programa</h3>
	              <br>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
            		<ul id="errors" style="padding-left: 0"></ul>	
					<form id="form" enctype="multipart/form-data">
						@if ($programa)
							<input type="hidden" name="id" value="{{ $programa->id }}">
						@endif

						<div class="col-md-6">
						  <div class="form-group">
						  	<label for="Nome do programa">Nome do programa</label>
						  	<input type="text" name="nome" class="form-control" @if ($programa) value="{{ $programa->nome }}" @endif>
						  </div>
						</div>
	            </div>
	            <div class="box-footer">
                	<button type="submit" class="btn btn-primary">
                		@if ($programa)
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
			@if ($programa)
				ajax("{{ route('atualizar-programa', $programa->id) }}", 'POST', '#form', "{{ route('programa') }}");
			@else
				ajax("{{ route('registrar-programa') }}", 'POST', '#form', "{{ route('programa') }}");	
			@endif
		});
	});
</script>
@endpush