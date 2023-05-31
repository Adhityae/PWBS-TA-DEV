<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Tampil Data Kamar</title>
@endsection

<!-- header -->
@section('headerAdmin')
@include('Layout.headerAdmin')
@endsection
<!-- end header -->

<!-- sidebar -->
@section('sidebarAdmin')
@include('Layout.sidebarAdmin')
@endsection
<!-- end sidebar -->

<!-- content -->
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Tampil Data Kamar</h4>
                        <a href="{{ route('Admin/vw_kamar/tambah_kamar') }}" class="btn btn-primary float-right veiwbutton">
                            <i class="fas fa-plus"></i><span> Tambah </span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card">
                        <div class="table-responsive">
                            <table class="table align-items-center justify-content-center table-flush table-hover" id="dataTableHover">
                                <thead>
                                    <tr>
                                        <!-- <th class="text-center">No</th> -->
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Kamar</th>
                                        <th class="text-center">Nama kamar</th>
                                        <th class="text-center">Lantai</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Foto</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result->DataKamar as $output)
                                    <tr>
                                        <!-- <td class="text-center"></td> -->
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $output->kode_kamar }}</td>
                                        <td class="text-center">{{ $output->nama_kamar }}</td>
                                        <td class="text-center">{{ $output->lantai }}</td>
                                        <td class="text-center">{{ $output->deskripsi_kamar }}</td>
                                        <td class="text-center">{{ $output->status }}</td>
                                        <td class="text-center">{{ $output->harga }}</td>
                                        <td class="text-center">{{ $output->foto_kamar }}</td>
                                        <td class="text-center">
                                            <button id="btn_edit" class="btn btn-sm bg-warning-light mr-2"
                                            onclick="gotoUpdate('{{ $output->kode_kamar }}')">
                                                <i class="fas fa-pencil"></i></button>
                                            <button id="btn_hapus" class="btn btn-sm bg-danger-light mr-2"
                                            onclick="gotoDelete('{{ $output->kode_kamar }}')">
                                                <i class="fas fa-trash"></i></button>
                                            <button id="btn_detail" class="btn btn-sm bg-primary-light mr-2"
                                            onclick="gotoDetail('{{ $output->kode_kamar }}')">
                                                <i class="fa-solid fa-circle-info"></i></button>
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
</div>

@push('scripts')
    <script src="{{ asset('/template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
@endpush

@endsection
<!-- end content -->
