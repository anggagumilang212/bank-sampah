@extends('layout.layout')
@section('title', 'Data Jenis Sampah')
@section('content')

    @include('sweetalert::alert')
    <!-- Page content -->
    <div class="container-fluid mt--2">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Data Jenis Sampah</h3>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary btn-round ml-auto " data-toggle="modal" data-target="#modalCreate">
                                <i class="fa fa-plus"></i>jenissampah</button>
                        </div>
                    </div>

                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Foto</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($jenissampah as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->deskripsi }}</td>
                                        <td><img src="{{ asset('fotojenissampah/' . $row->foto) }}" alt=""
                                                width="40px" height="40px" class="rounded-circle"></td>
                                        <td>Rp.{{ $row->harga }}/kg</td>
                                        <td>
                                            <a href=# data-target="#formModalEdit{{ $row->id }}" data-toggle="modal"
                                                class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ asset('admin/delete-jenissampah/' . $row->id) }}" button
                                                type="button" class="btn btn-sm btn-danger"
                                                onClick="return confirm('Yakin akan menghapus data ini!')"></button><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </thead>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Modal Tambah Data --}}

    <div class="modal fade bd-example-modal-lg" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Create Data jenissampah</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="/admin/create-jenissampah" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="nama" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi" required>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" oninput="formatRibuan(this)"
                                placeholder="harga" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal Tambah Data --}}

    <script>
        function formatRibuan(input) {
            // Hapus tanda titik dan koma dari input
            let angka = input.value.replace(/[.,]/g, '');

            // Format angka menjadi ribuan dengan tanda titik
            angka = parseFloat(angka).toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            // Tampilkan angka yang sudah diformat kembali ke input
            input.value = angka;
        }
    </script>


    {{-- Modal Edit Data --}}
    @foreach ($jenissampah as $row)
        <form action="/admin/edit-jenissampah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="formModalEdit{{ $row->id }}" tabindex="-1" role="dialog"
                aria-labelledby="formModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" class="form-control" id="id" name="id"
                                value="{{ $row->id }}">
                            <div class="form-group">
                                <label for="nama_jenissampah">Nama</label>
                                <input type="text" class="form-control" id="nama_jenissampah" name="nama"
                                    value="{{ $row->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                    value="{{ $row->deskripsi }}">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                <input class="form-control" type="hidden" name="gambarLama"
                                    value="{{ $row->foto }}">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga"
                                    value="{{ $row->harga }}">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
    {{-- End Modal Edit Data --}}

@endsection
<!-- End content -->
