@extends('base')
@section('konten')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fas fa-table"></i>
                Data Table Kategori</div>
                <div class="card-body">
                <a href="" class="float-right btn btn-primary">Tambah</a>
                  <h4 class="card-title">Basic Table</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id Kasir</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Telepon</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($kasir as $value)
                        <tr>
                            <td>{{$value->id_kasir}}</td>
                            <td>{{$value->nama_kasir}}</td>
                            <td>{{$value->alamat}}</td>
                            <td>{{$value->telepon}}</td>
                            <td width="1">
                            <div class="btn-group">
                                <a href="" class="btn btn-success btn-sm far fa-edit"></a>
                            </div>
                            </td>
                            <td width="1">
                            <form action="{{route('kasir.destroy',$value->id_kasir)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm far fa-trash-alt" type="submit"></button>
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