@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <!-- <div class="card">
                    <div class="card-header">
                        Data Purchase Order
                    </div>
                    <div class="card-body">
                        <form action="{{ route('purchaseorder.update', $purchaseorder->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Kode </label>
                                <input type="text" class="form-control  @error('no_po') is-invalid @enderror"
                                    name="no_po" value="{{ $purchaseorder->no_po }}">
                                @error('no_po')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal" value="{{ $purchaseorder->tanggal }}">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control  @error('alamat') is-invalid @enderror" name="alamat">{{ $purchaseorder->alamat }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Supplier</label>
                                <input type="text" class="form-control  @error('supplier') is-invalid @enderror"
                                    name="supplier" value="{{ $purchaseorder->supplier }}">
                                @error('supplier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis</label>
                                <select class="form-select @error('jenis') is-invalid @enderror" name="jenis">
                                    <option selected>Pilih Satuan</option>
                                    <option value="Benang" {{ $purchaseorder->jenis == 'Benang' ? 'selected' : '' }}>Benang</option>
                                    <option value="Sparepart" {{ $purchaseorder->jenis == 'Sparepart' ? 'selected' : '' }}>Sparepart
                                    </option>
                                  
                                </select>
                                @error('jenis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Pembelian</label>
                                <input type="text" class="form-control  @error('jumlah_pembelian') is-invalid @enderror"
                                    name="jumlah_pembelian" value="{{ $purchaseorder->jumlah_pembelian }}">
                                @error('jumlah_pembelian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Termin</label>
                                <input type="text" class="form-control  @error('item') is-invalid @enderror"
                                    name="item" value="{{ $purchaseorder->item }}">
                                @error('item')
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
                    <h5 class="card-header">Data Purchase Order</h5>
                    <!-- Account -->
                
                    <hr class="my-0" />
                    <div class="card-body">
                    <form action="{{ route('purchaseorder.update', $purchaseorder->id) }}" method="post">
                            @csrf
                            @method('put')
                        <div class="row">
                          <div class="mb-3 col-md-6">
                          <label class="form-label">No PO </label>
                                <input type="text" class="form-control  @error('no_po') is-invalid @enderror"
                                    name="no_po" value="{{ $purchaseorder->no_po }}">
                                @error('no_po')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                         
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Tanggal</label>
                                <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal" value="{{ $purchaseorder->tanggal }}">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label">Jenis</label>
                                <select class="form-select @error('jenis') is-invalid @enderror" name="jenis">
                                    <option selected>Pilih Satuan</option>
                                    <option value="Benang" {{ $purchaseorder->jenis == 'Benang' ? 'selected' : '' }}>Benang</option>
                                    <option value="Sparepart" {{ $purchaseorder->jenis == 'Sparepart' ? 'selected' : '' }}>Sparepart
                                    </option>
                                  
                                </select>
                                @error('jenis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Item</label>
                                <input type="text" class="form-control  @error('item') is-invalid @enderror"
                                    name="item" value="{{ $purchaseorder->item }}">
                                @error('item')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                          </div>
                         
                          <div class="mb-3 col-md-6">
                          <div class="mb-3">
                          <label class="form-label">Supplier</label>
                                <input type="text" class="form-control  @error('supplier') is-invalid @enderror"
                                    name="supplier" value="{{ $purchaseorder->supplier }}">
                                @error('supplier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                           
                         
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Jumlah Pembelian</label>
                                <input type="number" class="form-control  @error('jumlah_pembelian') is-invalid @enderror"
                                    name="jumlah_pembelian" value="{{ $purchaseorder->jumlah_pembelian }}">
                                @error('jumlah_pembelian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Harga Pembelian</label>
                                <input type="text" class="form-control  @error('harga_pembelian') is-invalid @enderror"
                                    name="harga_pembelian" value="{{ $purchaseorder->harga_pembelian }}">
                                @error('harga_pembelian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Termin</label>
                                <input type="text" class="form-control  @error('termin') is-invalid @enderror"
                                    name="termin" value="{{ $purchaseorder->termin }}">
                                @error('termin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                          </div>
                      
                         
                       
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Simpan</button>
                          <!-- <button type="reset" class="btn btn-outline-secondary">Cancel</button> -->
                          <a href="{{ route('purchaseorder.index') }}" class="btn btn-danger" type="submit">Kembali</a>
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