@extends('layouts.base')

@section('content')
	<div class="content-wrapper" style="min-height: 916px;">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Locutores
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li class="active">Locutores</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	          <div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">Locutores</h3>
	              <br>
	              <br>
	              <a href="/locutor/cadastrar">
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
	              				<th>Programa</th>
	              			</tr>
	              		</thead>
	                	<tbody>
	                		@if (count($locutores))
		                		@foreach ($locutores as $locutor)
		                		<tr>
		                			<td>{{ $locutor->id }}</td>		                			
		                			<td>{{ $locutor->nome }}</td>
		                			@if ($locutor->programa)
		                			<td>{{ $locutor->programa->nome }}</td>
		                			@else
		                			<td>
		                				Nenhum programa associado
		                			</td>
		                			@endif
		                			<td>
		                				<a href="/locutor/{{ $locutor->id }}/alterar/">
		                					<i class="fa fa-pencil"></i>
		                				</a>
	                				</td>
		                			<td>
		                				<button type="button" class="btn btn-danger" onclick="excluir('{{ route('excluir-locutor', $locutor->id) }}')">
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