@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Daftar Lowongan</li>
			</ul>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title">Lowongan</h2>
		</div>
		<div class="panel-body">
				
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Perusahaan</th>
						<th>Membutuhkan</th>
						<th>Jabatan</th>
						<th>Lokasi</th>
						<th>Pendidikan</th>
						<th>Deskripsi</th>
						<th>Gaji</th>
						@role('admin')
						<th colspan="2">Action</th>@endrole
					</tr>
				</thead>
				<tbody>
					@foreach($loker as $data)
					<tr> 
						<td><a href="{{route('lokers.show', $data->id)}}">{{$data->nama}}</a></td>
						<td>{{$data->perusahaan}}</td>
						<td>{{$data->jabatan}}</td>
						<td>{{$data->lokasi}}</td>
						<td>{{$data->pendidikan}}</td>
						<td>{{$data->deskripsi}}</td>
						<td>{{$data->gaji}}</td>
						@role('admin')
						<td><form action="{{route('lokers.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" >
								<input type="submit" class="btn btn-danger" value="Delete">{{csrf_field()}}
						</form></td>@endrole
					</tr>
					@endforeach
				</tbody>
			</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection