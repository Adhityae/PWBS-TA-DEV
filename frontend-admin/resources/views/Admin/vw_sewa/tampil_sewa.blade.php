<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Tampil Data Riwayat Booking</title>
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
                        <h4 class="card-title float-left mt-2">Tampil Data Riwayat Booking</h4>
                        <a href="{{ route('Admin/vw_sewa/tambah_sewa') }}" class="btn btn-primary float-right veiwbutton">
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
                                        <th class="text-center">Kode Sewa</th>
                                        <th class="text-center">Kode Pesan</th>
                                        <th class="text-center">Kode User</th>
                                        <th class="text-center">Kode kamar</th>
                                        <th class="text-center">Tanggal Keluar</th>
                                        <th class="text-center">Pembayaran</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result->DataSewa as $output)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $output->kode_sewa }}</td>
                                        <td class="text-center">{{ $output->kode_pesan }}</td>
                                        <td class="text-center">{{ $output->kode_user }}</td>
                                        <td class="text-center">{{ $output->kode_kamar }}</td>
                                        <td class="text-center">{{ $output->tanggal_keluar }}</td>
                                        <td class="text-center">{{ $output->pembayaran }}</td>
                                        <td class="text-center">{{ $output->status }}</td>
                                        <td class="text-center">
                                            <button id="btn_edit" class="btn btn-sm bg-warning-light mr-2"
                                            onclick="gotoUpdate('{{ $output->kode_sewa }}')">
                                                <i class="fas fa-pencil"></i></button>
                                            <button id="btn_hapus" class="btn btn-sm bg-danger-light mr-2"
                                            onclick="gotoDelete('{{ $output->kode_sewa }}')">
                                                <i class="fas fa-trash"></i></button>
                                            <button id="btn_detail" class="btn btn-sm bg-primary-light mr-2"
                                            onclick="gotoDetail('{{ $output->kode_sewa }}')">
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
