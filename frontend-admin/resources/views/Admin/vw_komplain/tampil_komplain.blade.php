<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Tampil Data Komplain</title>
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
                        <h4 class="card-title float-left mt-2">Tampil Data Komplain</h4>
                        <button id="btn_refresh" class="btn btn-primary float-right veiwbutton ml-2">Refresh</button>
                        <button id="btn_tambah" class="btn btn-primary float-right veiwbutton ml-2" onclick="gotoAdd()">
                            <i class="fas fa-plus"></i><span> Tambah </span></button>
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
                                            <button id="btn_hapus" class="btn btn-sm bg-danger-light mr-2"
                                            onclick="gotoDelete('{{ $output->kode_komplain }}')">
                                                <i class="fas fa-trash"></i></button>
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

<!-- JS Datatable -->
@push('scripts')
<script src="{{ asset('/template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable(); // ID From dataTable
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });

</script>
@endpush
<!-- End JS Datatable -->

<!-- Custom Function tombol (JS) -->
<script>
    // Buat fungsi untuk link tombol tambah komplain
    function gotoAdd() {
        location.href = '{{ url('/Admin/vw_komplain/tambah_komplain') }}';
    }

    // Buat function untuk btn_refresh
    document.getElementById("btn_refresh").addEventListener('click',
        function () {
            location.href = '{{ url('Admin/vw_komplain/tampil_komplain') }}'
        })

    // Buat function untuk link kehalaman ubah data
    function gotoUpdate(kode) {
        location.href = '{{ url('/Admin/vw_komplain/edit_komplain/updateKomplain') }}/' + kode;
    }

    // function untuk btn_delete data Komplain
    function gotoDelete(kode) {
        if (confirm("Kode Komplain : " + kode + " Ingin Dihapus ?") === true) {
            // panggil function "deleteData"
            deleteData(kode)
        }
    }

    // Buat fungsi untuk link tombol tambah Komplain
    function gotoDetail(kode) {
        location.href = '{{ url('/Admin/vw_komplain/detail_komplain/detailKomplain') }}/' + kode;
    }

    // function deleteKomplain
    function deleteData(kode) {
        const url = '{{ url('/Admin/vw_komplain/tampil_komplain/deleteKomplain') }}/' + kode;

        // proses asycn (fetch)
        fetch(url, {
                method: "DELETE",
                headers: {
                    'X-CSRF-Token': document.querySelector('meta[name="_token"]').content
                }
            })

            // ini untuk membaca response dari fetch
            .then((respons) => respons.json())

            // ini untuk menampilkan hasil dari then sebelumnya
            .then((result) => {
                alert(result.pesan)
                document.querySelector("#btn_refresh").click()
            })
            // jika terjadi error pada saat fetch data
            .catch((error) => alert("Data gagal dikirim"))
    }

</script>

@endsection
<!-- end content -->
