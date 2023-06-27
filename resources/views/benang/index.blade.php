@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <h3>Data Benang</h3>
                <div class="card">
                    <div class="card-header">
                      
                        <a href="{{ route('benang.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                        
                        <button type="button" class="btn btn-sm btn-warning">
                            <span class='bx bx-archive-in' ></span>&nbsp; Import
                          </button>
                          <button type="button" class="btn btn-sm btn-success">
                            <span  class='bx bx-archive-out'></span>&nbsp; Export
                          </button>
                          <button type="button" class="btn btn-sm btn-danger">
                            <span   class='bx bxs-printer'></span>&nbsp; PDF
                          </button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table  class="table table-striped " id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode </th>
                                        <th>Deskripsi</th>
                                        <th>Satuan</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($benang as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->kode_benang }}</td>
                                            <td>{{ $data->deskripsi }}</td>
                                            <td>{{ $data->satuan }}</td>
                                         
                                            <td>
                                            <form action="{{ route('benang.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('benang.edit', $data->id) }}" class="btn btn-sm btn-outline-success ">
                                                        <i class='bx bx-edit'></i>
                                                    </a> |
                                                    <!-- <a href="{{ route('benang.show', $data->id) }}" class="btn btn-sm btn-outline-warning ">
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