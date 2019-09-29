@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Músicas
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li class="active">Músicas</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">Músicas</h3>
	              <br>
	              <br>
	              <a href="/musica/cadastrar">
	              	<i class="fa fa-plus"></i> Cadastrar
	              </a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              	<table class="table table-bordered">
	              		<thead>
	              			<tr>
	              				<th style="width: 10px">#</th>
	              				<th>Artista</th>
	              				<th>Nome da música</th>
	              				<th>Estilo Musical</th>
	              			</tr>
	              		</thead>
	                	<tbody>
	                		@if (count($musicas))
		                		@foreach ($musicas as $musica)
		                		<tr>
		                			<td>{{ $musica->id }}</td>		                			
		                			<td>{{ $musica->artista }}</td>
		                			<td>{{ $musica->nome }}</td>
		                			@if ($musica->estilo)
		                			<td>{{ $musica->estilo->nome }}</td>
		                			@else
		                			<td>
		                				Nenhum estilo musical associado
		                			</td>
		                			@endif
		                			<td>
		                				<a href="/musica/{{ $musica->id }}/alterar/">
		                					<i class="fa fa-pencil"></i>
		                				</a>
	                				</td>
		                			<td>
		                				<button type="button" class="btn btn-danger" onclick="excluir('{{ route('excluir-musica', $musica->id) }}')">
		                					<i class="fa fa-trash"></i>
		                				</button>
		                			</td>
	            				</tr>
	            				@endforeach
            				@endif
	              		</tbody>
	              	</table>
	            </div>
	          </div>
	          <!-- /.box -->
	        </div>
	      </div>
	    </section>
	    <!-- /.content -->
	  </div>
@endsection