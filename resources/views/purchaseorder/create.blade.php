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
                        <form action="{{ route('purchaseorder.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">No PO</label>
                                <input type="text" class="form-control  @error('no_po') is-invalid @enderror"
                                    name="no_po">
                                @error('no_po')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="text" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control  @error('alamat') is-invalid @enderror" name="alamat"></textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NPWP</label>
                                <input type="text" class="form-control  @error('item') is-invalid @enderror"
                                    name="item">
                                @error('item')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis</label>
                                <select class="form-select @error('jenis') is-invalid @enderror" name="jenis"  >
                                    <option selected>Pilih Satuan</option>
                                    <option value="Benang">Benang</option>
                                    <option value="Sparepart">Sparepart</option>
                                  
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
                                    name="jumlah_pembelian">
                                @error('jumlah_pembelian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SUpplier</label>
                                <input type="text" class="form-control  @error('supplier') is-invalid @enderror"
                                    name="supplier">
                                @error('supplier')
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
                      <form id="formAccountSettings" action="{{ route('purchaseorder.store') }}" method="post">
                      @csrf
                        <div class="row">
                          <div class="mb-3 col-md-6">
                          <label class="form-label">No PO</label>
                                <input placeholder="Contoh: Y12-5" type="text" class="form-control  @error('no_po') is-invalid @enderror"
                                    name="no_po">
                                @error('no_po')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                         
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Tanggal</label>
                                <input  type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label">Jenis</label>
                                <select class="form-select @error('jenis') is-invalid @enderror" name="jenis"  >
                                    <option selected>Pilih Satu</option>
                                    <option value="Benang">Benang</option>
                                    <option value="Kain">Kain</option>
                                  
                                </select>
                                @error('jenis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="mb-3 col-md-6">
                          <div class="mb-3">
                                <label class="form-label">Item</label>
                                <input placeholder="Contoh: " type="text" class="form-control  @error('item') is-invalid @enderror"
                                    name="item">
                                @error('item')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Supplier</label>
                                <input placeholder="Contoh: " type="text" class="form-control  @error('supplier') is-invalid @enderror"
                                    name="supplier">
                                @error('supplier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                          </div>
                         
                           
                         
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Jumlah Pembelian</label>
                                <input placeholder="Contoh: " type="number" class="form-control  @error('jumlah_pembelian') is-invalid @enderror"
                                    name="jumlah_pembelian">
                                @error('jumlah_pembelian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Harga Pembelian</label>
                                <input placeholder="Contoh: " type="text" class="form-control  @error('harga_pembelian') is-invalid @enderror"
                                    name="harga_pembelian">
                                @error('harga_pembelian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="mb-3 col-md-6">
                          <label class="form-label">Termin</label>
                                <input placeholder="Contoh: " type="text" class="form-control  @error('termin') is-invalid @enderror"
                                    name="termin">
                                @error('termin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                          </div>
                         
                       
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Simpan</button>
                          <a href="{{ route('purchaseorder.index') }}" class="btn btn-danger" type="submit">Kembali</a>
                          <!-- <button type="reset" class="btn btn-outline-secondary">Cancel</button> -->
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