@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Lowongan</li>
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
						<th>Gaji</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($lowongan as $data)
					<tr> 
						<td><a href="{{route('lowongans.show', $data->id)}}">{{$data->nama}}</a></td>
						<td>{{$data->perusahaan}}</td>
						<td>{{$data->jabatan}}</td>
						<td>{{$data->lokasi}}</td>
						<td>{{$data->pendidikan}}</td>
						<td>{{$data->gaji}}</td>
						
						<td>
                                <a class="btn btn-warning" href="{{ url('/member/civi/tambah',$data->id) }}">Lamar Pekerjaan</a></td>
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