@extends('penduduk.master')
 
@section('form')
<form action="{{ url ('penduduk/'. $edit->id)}}" method="post">
    @csrf
                    <input type="hidden" class="form-control" id="id" name='_method' value="PATCH">


                    <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="number" class="form-control" id="nik" name='nik' placeholder="Enter NIK" value='{{$edit->nik}}' required>
                    </div>


                    <div class="form-group">
                      <label for="nama">Nama Penduduk</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" value='{{$edit->nama}}' required>
                    </div>


                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='kelamin'  value='{{$edit->kelamin}}' required>
                        <option value="Laki Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name='alamat' placeholder="Enter Alamat" required  value='{{$edit->alamat}}' required>
                    </div>

                    <div class="form-group">
                      <label>Status Perkawinan</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='status'  value='{{$edit->status}}'required>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" name='pekerjaan' placeholder="Enter Pekerjaan" value='{{$edit->pekerjaan}}' required >
                    </div>


                    <div class="form-group">
                      <label>Kewarganegaraan</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='kewarganegaraan'  value='{{$edit->kewarganegaraan}}' required>
                        <option value="WNI">Warga Negara Indonesia (WNI)</option>
                        <option value="WNA">Warga Negara Asing (WNA)</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="tempat">Tempat Lahir</label>
                      <input type="text" class="form-control" name='tempat_lahir' placeholder="Enter Tempat Lahir"  value='{{$edit->tempat_lahir}}' required>
                    </div>

                    <div class="form-group">
                      <label for="tannggal">Tanggal Lahir</label>
                      <input type="date" class="form-control" name='tanggal_lahir' placeholder="Enter Tanggal Lahir"  value='{{$edit->tanggal_lahir}}' required>
                    </div>

                    <div class="form-group">
                      <label>Golongan Darah</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='golongan'  value='{{$edit->golongan}}' required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                      </select>
                    </div>

                    <input type="submit">
                  </form>
@endsection