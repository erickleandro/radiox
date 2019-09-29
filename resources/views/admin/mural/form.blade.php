@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Cadastrar Mural
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li><a href="{{ route('musica') }}"><i class="fa fa-group"></i> Mural</a></li>
	        <li class="active">Cadastrar Mural</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">Cadastrar Mural</h3>
	              <br>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
            		<ul id="errors" style="padding-left: 0"></ul>	
					<form id="form" enctype="multipart/form-data">
						@if ($mural)
							<input type="hidden" name="id" value="{{ $mural->id }}">
						@endif
						<div class="col-md-4">
						  <div class="form-group">
						  	<label for="Nome">Nome</label>
						  	<input type="text" name="nome" class="form-control" @if ($mural) value="{{ $mural->nome }}" @endif>
						  </div>
						</div>
						<div class="col-md-4">
						  <div class="form-group">
						  	<label for="E-mail">E-mail</label>
						  	<input type="email" name="email" class="form-control" id="email">
						  </div>
						</div>
						<div class="col-md-4">
						  <div class="form-group">
						  	<label for="E-mail">Aprovado?</label>
						  	<select name="aprovado" class="form-control">
						  		<option @if ($mural && $mural->aprovado == 'Não') selected="true" @endif>Não</option>
						  		<option @if ($mural && $mural->aprovado == 'Sim') selected="true" @endif>Sim</option>
						  	</select>
						  </div>
						</div>
						<div class="col-md-12">
						  <div class="form-group">
						  	<label for="Mensagem">Mensagem</label>
						  	<textarea name="mensagem" class="form-control" rows="5">@if ($mural) {{ $mural->mensagem }} @endif</textarea>
						  </div>
						</div>
	            </div>
	            <div class="box-footer">
                	<button type="submit" class="btn btn-primary">
                		@if ($mural)
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
			@if ($mural)
				ajax("{{ route('atualizar-mural', $mural->id) }}", 'POST', '#form', "{{ route('mural') }}");
			@else
				ajax("{{ route('registrar-mural') }}", 'POST', '#form', "{{ route('mural') }}");	
			@endif
		});
	});
</script>
@endpush