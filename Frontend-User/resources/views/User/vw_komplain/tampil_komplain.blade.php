<!-- master_user -->
@extends('Layout.master_user')
<!-- end master_user -->

@section('title_tamplate')
<title>Sistem Customer E-KOS | Tampil Data Komplain</title>
@endsection

<!-- header -->
@section('headerUser')
@include('Layout.headerUser')
@endsection
<!-- end header -->

<!-- sidebar -->
@section('sidebarUser')
@include('Layout.sidebarUser')
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
                        <h4 class="card-title float-left mt-2">Tampil Data Komplain</h4>
                        <a href="{{ route('User/vw_komplain/tambah_komplain') }}" class="btn btn-primary float-right veiwbutton">
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
                                        <th class="text-center">Kode Komplain</th>
                                        <th class="text-center">Kode User</th>
                                        <th class="text-center">Kode Kamar</th>
                                        <th class="text-center">Perihal</th>
                                        <th class="text-center">Isi Pesan</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result->DataKomplain as $output)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $output->kode_komplain }}</td>
                                        <td class="text-center">{{ $output->kode_user }}</td>
                                        <td class="text-center">{{ $output->kode_kamar }}</td>
                                        <td class="text-center">{{ $output->perihal }}</td>
                                        <td class="text-center">{{ $output->isi }}</td>
                                        <td class="text-center">{{ $output->status }}</td>
                                        <td class="text-center">
                                            <button id="btn_edit" class="btn btn-sm bg-warning-light mr-2"
                                            onclick="gotoUpdate('{{ $output->kode_komplain }}')">
                                                <i class="fas fa-pencil"></i></button>
                                            <button id="btn_detail" class="btn btn-sm bg-primary-light mr-2"
                                            onclick="gotoDetail('{{ $output->kode_komplain }}')">
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
