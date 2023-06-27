@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Purchase Order
                        <a href="{{ route('purchaseorder.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped " id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No PO </th>
                                        <th>Tanggal</th>
                                        <th>Jenis</th>
                                        <th>Item</th>
                                        <th>Supplier</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Termin</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($purchaseorder as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->no_po }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->jenis }}</td>
                                            <td>{{ $data->item }}</td>
                                            <td>{{ $data->supplier }}</td>
                                            <td>{{ $data->jumlah_pembelian }}</td>
                                            <td>{{ $data->harga_pembelian }}</td>
                                            <td>{{ $data->termin }}</td>
                                         
                                            <td>
                                            <form action="{{ route('purchaseorder.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('purchaseorder.edit', $data->id) }}" class="btn btn-sm btn-outline-success ">
                                                        <i class='bx bx-edit'></i>
                                                    </a> |
                                                    <!-- <a href="{{ route('purchaseorder.show', $data->id) }}" class="btn btn-sm btn-outline-warning ">
                                                        <i class='bx bx-show-alt'></i>
                                                    </a> | -->
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin?')">
                                                        <i class='bx bx-trash'></i>
                                                    </button>
                                                    
                                                </form>
                                            </td>
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