@extends('template.core')

@section('content')
<div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">tambahkan data</h5>

              <!-- General Form Elements -->
              <form method="POST" action="{{route('updatedata',$data['id'])}}">
              @csrf  
              <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">id_tanah</label>
                  <div class="col-sm-10">
                  <select name="id_tanah" class="form-select" id="validationDefault04" required="">
                    <option selected="" disabled="" value="">pilih tanah</option>
                    @foreach($data_tanah as $d)
                    <option selected=""  value="">{{$d['id']}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">jumlah_barang</label>
                  <div class="col-sm-10">
                    <input type="number" name="jumlah_barang" class="form-control" value="{{$data['jumlah_barang']}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">tanggal_barang</label>
                  <div class="col-sm-10">
                    <input type="date" name="tanggal_barang" class="form-control" value="{{$data['jumlah_barang']}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">id_pedagang</label>
                  <div class="col-sm-10">
                  <select name="id_tanah" class="form-select" id="validationDefault04" required="">
                    <option selected="" disabled="" value="">pilih tanah</option>
                    @foreach($data_tanah as $d)
                    <option selected=""  value="">{{$d['id']}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">kirim</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">kirim data</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

@endsection