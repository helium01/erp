@extends('template.core')
@section('content')

<div class="pagetitle">
      <h1>data barang</h1>
    </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id_pedagang</th>
      <th scope="col">id_tanah</th>
      <th scope="col">jumlah_barang</th>
      <th scope="col">tanggal_barang</th>
      <th scope="col">opsi</th>
    </tr>
  </thead>
  @foreach($data as $d)
  <tbody class="table-group-divider">
    <tr>
      <td>{{$d['id_pedagang']}}</td>
      <td>{{$d['id_tanah']}}</td>
      <td>{{$d['jumlah_barang']}}</td>
      <td>{{$d['tanggal_barang']}}</td>
      <td>
      <a class="btn btn-primary" href="{{route('editbarang',$d['id'])}}" role="button"><i class="bi bi-brush-fill"></i> edit</a>  
      | 
      <a class="btn btn-danger" href="#" role="button"><i class="bi bi-trash-fill"></i> hapus</a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

@endsection