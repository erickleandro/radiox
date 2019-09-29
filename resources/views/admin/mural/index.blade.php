@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Mural
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li class="active">Mural</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">Mural</h3>
	              <br>
	              <br>
	              <a href="/mural/cadastrar">
	              	<i class="fa fa-plus"></i> Cadastrar
	              </a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              	<table class="table table-bordered">
	              		<thead>
	              			<tr>
	              				<th style="width: 10px">#</th>
	              				<th>Nome</th>
	              				<th>E-mail</th>
	              				<th>Mensagem</th>
	              				<th>Aprovado?</th>
	              			</tr>
	              		</thead>
	                	<tbody>
	                		@if (count($mural))
		                		@foreach ($mural as $mural)
		                		<tr>
		                			<td>{{ $mural->id }}</td>		                			
		                			<td>{{ $mural->nome }}</td>
		                			<td>{{ $mural->email }}</td>
		                			<td>{{ str_limit($mural->mensagem, 100, '...') }}</td>
		                			<td>{{ $mural->aprovado }}</td>
		                			<td>
		                				<a href="/mural/{{ $mural->id }}/alterar/">
		                					<i class="fa fa-pencil"></i>
		                				</a>
	                				</td>
		                			<td>
		                				<button type="button" class="btn btn-danger" onclick="excluir('{{ route('excluir-mural', $mural->id) }}')">
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