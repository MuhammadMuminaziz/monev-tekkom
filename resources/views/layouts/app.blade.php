<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monev Tekkom</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    {{-- checkbox datatable --}}
    <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/izitoast/css/iziToast.min.css">

    @livewireStyles

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <main>
        <div id="wrapper">

            <!-- Sidebar -->
            @component('layouts/sidebar')
                
            @endcomponent
            <!-- End of Sidebar -->
        
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
        
                <!-- Main Content -->
                <div id="content">
        
                    <!-- Topbar -->
                    @component('layouts.topbar')
                        
                    @endcomponent
                    <!-- End of Topbar -->
        
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; {{ config('app.name') }} {{ date('Y') }}</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
    </main>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>
                <div class="modal-body">Apakah anda yakin ingin keluar ?</div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger" href="login.html">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb-admin-2/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sb-admin-2/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb-admin-2/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-2/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-2/js/demo/chart-bar-demo.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sb-admin-2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb-admin-2/js/demo/datatables-demo.js') }}"></script>
    <script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
    
    <script src=""></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://demo.getstisla.com/assets/modules/izitoast/js/iziToast.min.js"></script>

    @yield('script')

    

    <script>
        var table;
        $(document).ready(function(){

            // checkbox
            table = $('#dataTableCheckBox').DataTable({
                'columnDefs': [{
                    'targets': 0,
                    'checkboxes': {
                        'selectRow': true
                    }
                }]
            })
            // Message
            @if(Session::has('message'))
            iziToast.success({
                title: 'Yeay!',
                message: "{{ session('message') }}",
                position: 'topRight'
            });
            @endif

            // Confirm delete
            $('.not-link').click(function(e){
                e.preventDefault();
            });
            $(document).on('click', '.confirm-delete', function(){
                Swal.fire({
                    title: '',
                    title: 'Yakin ingin menghapus?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus'
                }).then((result) => {
                    if(result.isConfirmed){
                        $(this).prev().trigger('click');
                    }
                })
            })
            
            $('.select2').select2({
                placeholder: "- pilih kecamatan -"
            });

            if($('.form-edit-user').val() == 2){
                $('.form-city').addClass('d-block');
            }else{
                $('.form-city').removeClass('d-block');
            }
        })

        $('#verify').on('click', function(){
            Swal.fire({
                title: '',
                title: 'Apakah anda yakin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Verifikasi'
            }).then((result) => {
                if (result.isConfirmed) {
                    var selectedRow = table.column(0).checkboxes.selected();
                    var data = [];
                    $.each(selectedRow, function(key, id){
                        data.push(id);
                    })
                    $.ajax({
                        url: "{{ url('/teachers-verify/ferify') }}",
                        type: 'get',
                        data: {data},
                        success:function(data){
                            if(data.success){
                                location.reload()
                            }
                        },
                        error:function(){
                            iziToast.warning({
                                title: 'Oops!',
                                message: 'Pilih data terlebih dahulu',
                                position: 'topRight'
                            });
                        }
                    })
                }
            })
        })
        
        $('#reject').on('click', function(){
            Swal.fire({
                title: '',
                title: 'Apakah anda yakin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tolak'
            }).then((result) => {
                if (result.isConfirmed) {
                    var selectedRow = table.column(0).checkboxes.selected();
                    var data = [];
                    $.each(selectedRow, function(key, id){
                        data.push(id);
                    })
                    $.ajax({
                        url: "{{ url('/teachers-verify/reject') }}",
                        type: 'get',
                        data: {data},
                        success:function(data){
                            if(data.success){
                                location.reload();
                            }
                        },
                        error:function(){
                            iziToast.warning({
                                title: 'Oops!',
                                message: 'Pilih data terlebih dahulu',
                                position: 'topRight'
                            });
                        }
                    })
                }
            })
        })
    </script>
    

    <script>
        function getCity(){
            let opt = $('#role_id').val();
            if(opt == 2){
                $('.form-city').addClass('d-block');
                $('.verifykator').remove();
            }
            if(opt != 2){
                $('.form-city').removeClass('d-block');
                $('.verifykator').remove();
            }
        }

        // Add input School
        $('.add-input').on('click', function(){
            let input = `<input type="text" class="form-control mb-1 form-input"  name="nama_lembaga[]" id="nama_lembaga" placeholder="" multiple>`;
            $('.page-input').append(input);
        })
        $('.remove-input').on('click', function(){
            $('.page-input input.form-input:last').remove();
        })
        
        // Add input Teacher
        $('.add-input-training').on('click', function(){
            let input1 = `<div class="form-row form-training">
                            <div class="form-group col-md-5">
                                <input type="text" class="form-control" name="name_of_training[]">
                            </div>
                            <div class="form-group col-md-3">
                                <select name="level[]" class="custom-select">
                                    <option selected>Pilih</option>
                                    <option {{ old('level') == 'Pemula' ? 'selected' : '' }}>Pemula</option>
                                    <option {{ old('level') == 'Lanjutan' ? 'selected' : '' }}>Lanjutan</option>
                                    <option {{ old('level') == 'Mahir' ? 'selected' : '' }}>Mahir</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="jampel[]">
                            </div>
                        </div>`;
            $('.page-input-training').append(input1);
        })

        $('.remove-input-training').click(function(){
            $('.page-input-training div.form-training:last').remove();
        })

        $('.add-input-training-needs').on('click', function(){
            let input = `<input type="text" class="form-control mb-2 form-training-now" id="training_needs_now" name="training_needs_now[]">`;
            $('.page-input-training-needs').append(input);
        })
        
        $('.remove-input-training-needs').click(function(){
            $('.page-input-training-needs input.form-training-now:last').remove();
        })
        
        $('.add-input-program').on('click', function(){
            let input = `<input type="text" class="form-control mb-2 form-program" id="program" name="program[]" placeholder="" multiple>`;
            $('.page-input-program').append(input);
        })

        $('.remove-input-program').click(function(){
            $('.page-input-program input.form-program:last').remove();
        })
            
        // edit city
        $('.edit-city').click(function(){
            let id = $(this).attr('id');
            $.ajax({
                url : "{{ url('/cities/edit') }}",
                type: 'get',
                data: 'id='+ id,
                success:function(data){
                    $('#modal-edit-city').html(data);
                }
            })
        })
        
        // edit district
        $('.edit-district').click(function(){
            let id = $(this).attr('id');
            $.ajax({
                url : "{{ url('/district/edit') }}",
                type: 'get',
                data: 'id='+ id,
                success:function(data){
                    $('#modal-edit-district').html(data);
                }
            })
        })

        // filter bt district
        $('#btn-filter').on('click', function(){
            let id = $('#filterDistrict').val();
            $.ajax({
                url : "{{ url('/filter-by-district') }}",
                type: "get",
                data: {id},
                success:function(data){
                    $('#page-school').html(data);
                    $('#schools-data').removeClass('d-none');
                    $('#schools-data').attr('href', '/reporting/download/semua-data-sekolah/' + id );
                }
            })
        })
    </script>

    

    @livewireScripts
</body>

</html>