@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <!-- <div class="card">
                    <div class="card-header">
                        Data Supplier
                    </div>
                    <div class="card-body">
                        <form action="{{ route('supplier.update', $supplier->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Kode </label>
                                <input type="text" class="form-control  @error('kode_supplier') is-invalid @enderror"
                                    name="kode_supplier" value="{{ $supplier->kode_supplier }}">
                                @error('kode_supplier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('nama_supplier') is-invalid @enderror"
                                    name="nama_supplier" value="{{ $supplier->nama_supplier }}">
                                @error('nama_supplier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control  @error('alamat') is-invalid @enderror" name="alamat">{{ $supplier->alamat }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NPWP</label>
                                <input type="text" class="form-control  @error('npwp') is-invalid @enderror"
                                    name="npwp" value="{{ $supplier->npwp }}">
                                @error('npwp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis</label>
                                <select class="form-select @error('jenis') is-invalid @enderror" name="jenis">
                                    <option selected>Pilih Satuan</option>
                                    <option value="Benang" {{ $supplier->jenis == 'Benang' ? 'selected' : '' }}>Benang</option>
                                    <option value="Sparepart" {{ $supplier->jenis == 'Sparepart' ? 'selected' : '' }}>Sparepart
                                    </option>
                                  
                                </select>
                                @error('jenis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nickname</label>
                                <input type="text" class="form-control  @error('nickname') is-invalid @enderror"
                                    name="nickname" value="{{ $supplier->nickname }}">
                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Termin</label>
                                <input type="text" class="form-control  @error('termin') is-invalid @enderror"
                                    name="termin" value="{{ $supplier->termin }}">
                                @error('termin')
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
                    <h5 class="card-header">Data Supplier</h5>
                    <!-- Account -->
                
                    <hr class="my-0" />
                    <div class="card-body">
                    <form action="{{ route('supplier.update', $supplier->id) }}" method="post">
                            @csrf
                            @method('put')
                        <div class="row">
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Kode </label>
                                <input type="text" class="form-control  @error('kode_supplier') is-invalid @enderror"
                                    name="kode_supplier" value="{{ $supplier->kode_supplier }}">
                                @error('kode_supplier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                         
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('nama_supplier') is-invalid @enderror"
                                    name="nama_supplier" value="{{ $supplier->nama_supplier }}">
                                @error('nama_supplier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Termin</label>
                                <input type="text" class="form-control  @error('termin') is-invalid @enderror"
                                    name="termin" value="{{ $supplier->termin }}">
                                @error('termin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                          </div>
                         
                          <div class="mb-3 col-md-6">
                          <div class="mb-3">
                          <label class="form-label">NPWP</label>
                                <input type="text" class="form-control  @error('npwp') is-invalid @enderror"
                                    name="npwp" value="{{ $supplier->npwp }}">
                                @error('npwp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                            <div class="mb-3 col-md-6">
                            <label class="form-label">Jenis</label>
                                <select class="form-select @error('jenis') is-invalid @enderror" name="jenis">
                                    <option selected>Pilih Satuan</option>
                                    <option value="Benang" {{ $supplier->jenis == 'Benang' ? 'selected' : '' }}>Benang</option>
                                    <option value="Sparepart" {{ $supplier->jenis == 'Sparepart' ? 'selected' : '' }}>Sparepart
                                    </option>
                                  
                                </select>
                                @error('jenis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                         
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Nickname</label>
                                <input type="text" class="form-control  @error('nickname') is-invalid @enderror"
                                    name="nickname" value="{{ $supplier->nickname }}">
                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                      
                          <div class="mb-3 ">
                          <label class="form-label">Alamat</label>
                                <textarea class="form-control  @error('alamat') is-invalid @enderror" name="alamat">{{ $supplier->alamat }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                       
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Simpan</button>
                          <!-- <button type="reset" class="btn btn-outline-secondary">Cancel</button> -->
                          <a href="{{ route('supplier.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
            </div>
            </div>
        </div>
    </div>
@endsection