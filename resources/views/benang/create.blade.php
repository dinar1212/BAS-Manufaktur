@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <!-- <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('benang.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Kode</label>
                                <input type="text" class="form-control  @error('kode_benang') is-invalid @enderror"
                                    name="kode_benang">
                                @error('kode_benang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control  @error('deskripsi') is-invalid @enderror"
                                    name="deskripsi">
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Satuan</label>
                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="satuan"  >
                                
                                    <option value="Kilogram">Kilogram</option>
                                    <option value="Bale">Bale</option>
                                  
                                </select>
                                @error('satuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
                <div class="card mb-4">
                    <h5 class="card-header">Data Benang</h5>
                    <!-- Account -->
                
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" action="{{ route('benang.store') }}" method="post">
                      @csrf
                        <div class="row">
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Kode</label>
                                <input  placeholder="Contoh: Y12-5" type="text" class="form-control  @error('kode_benang') is-invalid @enderror"
                                    name="kode_benang">
                                @error('kode_benang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                         
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Deskripsi</label>
                                <input  placeholder="Contoh: PT. Fardung" type="text" class="form-control  @error('deskripsi') is-invalid @enderror"
                                    name="deskripsi">
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                      
                          <div class="mb-3 ">
                          <label class="form-label">Satuan</label>
                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="satuan"  >
                                
                                    <option value="Pilih">Pilih</option>
                                    <option value="Kilogram">Kilogram</option>
                                    <option value="Bale">Bale</option>
                                  
                                </select>
                                @error('satuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                       
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Simpan</button>
                          <a href="{{ route('benang.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                          <!-- <button type="reset" class="btn btn-outline-secondary">Cancel</button> -->
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
            </div>
        </div>
    </div>
@endsection
