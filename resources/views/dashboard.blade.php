<x-app-layout>
    <div class="container-fluid">

        <div class="row">
            <!-- Kabupaten/Kota Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kabupaten/Kota
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $city }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cube  fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desa/Kecamatan Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Desa/Kecamatan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $district }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-city fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sekolah Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Sekolah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $school }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-school fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guru Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Guru</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $teacher }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <h1 class="text-gray-800">Data Sekolah</h1>
                <p class="text-gray-600 mb-0">Informasi sekolah yang ditampilkan di bawah ini merupakan informasi yang valid atau yang telah terverifikasi.</p>
                <small class="text-danger">catatan: informasi ini diambil pertahun periode</small>
            </div>
        </div>

        <!-- Sekolah -->
        <div class="row">
            <!-- Chart Presentasi Jumlah Siswa -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Presentasi Jumlah sekolah</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie py-4">
                            <canvas id="jumlahsekolah"></canvas>
                        </div>
                        <table class="small w-100">
                            <tr>
                                <td><i class="fas fa-circle text-primary"></i> SD</td>
                                <td>{{ $numberOfScholl[0] }}</td>
                                <td><i class="fas fa-circle text-info"></i> SMA</td>
                                <td>{{ $numberOfScholl[2] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-success"></i> SMP</td>
                                <td>{{ $numberOfScholl[1] }}</td>
                                <td><i class="fas fa-circle text-warning"></i> SMK</td>
                                <td>{{ $numberOfScholl[3] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-secondary"></i> Jumlah</td>
                                <td colspan="3">{{ $totalOfSchool }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Chart Presentasi Jumlah Siswa -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Pelaksanaan UNBK</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie py-4">
                            <canvas id="unbk"></canvas>
                        </div>
                        <table class="small w-100">
                            <tr>
                                <td><i class="fas fa-circle text-primary"></i> Sudah</td>
                                <td>{{ $unbk[0] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-success"></i> Belum</td>
                                <td>{{ $unbk[1] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-secondary"></i> Jumlah</td>
                                <td>{{ $totalUnbk }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Chart Presentasi Jumlah Siswa -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Presentasi Jumlah Siswa</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie py-4">
                            <canvas id="jumlahsiswa"></canvas>
                        </div>
                        <table class="small w-100">
                            <tr>
                                <td><i class="fas fa-circle text-primary"></i> Laki-laki</td>
                                <td>{{ $numberOfStudent[0] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-success"></i> Perempuan</td>
                                <td>{{ $numberOfStudent[1] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-secondary"></i> Jumlah</td>
                                <td>{{ $numberOfStudent[0] + $numberOfStudent[1] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <h1 class="text-gray-800">Data Guru</h1>
                <p class="text-gray-600 mb-0">Informasi guru yang ditampilkan di bawah ini merupakan informasi yang valid atau yang telah terverifikasi.</p>
                <small class="text-danger">catatan: informasi ini diambil pertahun periode</small>
            </div>
        </div>

        <!-- Guru -->
        <div class="row">

            <!-- Chart Status Ketenagaan -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Status Ketenagaan</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie py-4">
                            <canvas id="employmentStatus"></canvas>
                        </div>
                        <table class="small w-100">
                            <tr>
                                <td><i class="fas fa-circle text-primary"></i> PNS</td>
                                <td>{{ $employmentStatus[0] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-success"></i> NON PNS</td>
                                <td>{{ $employmentStatus[1] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-secondary"></i> Jumlah</td>
                                <td>{{ $employmentStatus[0] + $employmentStatus[1] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

             <!-- Chart Data Status Sertifikasi guru -->
             <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Rata-rata Pendidikan Terakhir</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie py-4">
                            <canvas id="lastEducation"></canvas>
                        </div>
                        <table class="small w-100">
                            <tr>
                                <td><i class="fas fa-circle text-primary"></i> SMA</td>
                                <td>{{ $lastEducation[0] }}</td>
                                <td><i class="fas fa-circle text-secondary"></i> D4</td>
                                <td>{{ $lastEducation[4] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-success"></i> D1</td>
                                <td>{{ $lastEducation[1] }}</td>
                                <td><i class="fas fa-circle text-dark"></i> S1</td>
                                <td>{{ $lastEducation[5] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-info"></i> D2</td>
                                <td>{{ $lastEducation[2] }}</td>
                                <td><i class="fas fa-circle text-warning"></i> S2</td>
                                <td>{{ $lastEducation[6] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-gray-400"></i> D3</td>
                                <td>{{ $lastEducation[3] }}</td>
                                <td><i class="fas fa-circle text-danger"></i> S3</td>
                                <td>{{ $lastEducation[7] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-secondary"></i> Jumlah</td>
                                <td colspan="3">{{ $totalEmployment }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Chart Status Sertifikat -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Status Sertifikat</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie py-4">
                            <canvas id="statusSertifikasiGuru"></canvas>
                        </div>
                        <table class="small w-100">
                            <tr>
                                <td><i class="fas fa-circle text-primary"></i> Sudah</td>
                                <td>{{ $sertificationStatus[0] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-success"></i> Belum</td>
                                <td>{{ $sertificationStatus[1] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-secondary"></i> Jumlah</td>
                                <td>{{ $totalEmployment }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Chart Presentasi Jumlah Siswa -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Keterlibatan UNBK</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie py-4">
                            <canvas id="involvement_unbk"></canvas>
                        </div>
                        <table class="small w-100">
                            <tr>
                                <td><i class="fas fa-circle text-primary"></i> Sudah</td>
                                <td>{{ $involvement_unbk[0] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-success"></i> Belum</td>
                                <td>{{ $involvement_unbk[1] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-secondary"></i> Jumlah</td>
                                <td>{{ $totalEmployment }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Chart Presentasi Jumlah Siswa -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Jumlah Guru</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie py-4">
                            <canvas id="jumlahguru"></canvas>
                        </div>
                        <table class="small w-100">
                            <tr>
                                <td><i class="fas fa-circle text-primary"></i> Laki-laki</td>
                                <td>{{ $jumlahguru[0] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-success"></i> Perempuan</td>
                                <td>{{ $jumlahguru[1] }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-secondary"></i> Jumlah</td>
                                <td>{{ $totalEmployment }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @section('script')
    <script>
        $(document).ready(function(){
            // Jumlah sekolah
            var ctx = document.getElementById("jumlahsekolah");
            var jumlahsekolah = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [ 'SD', 'SMP', 'SMA', 'SMK'],
                    datasets: [{
                    data: [
                        @foreach($numberOfScholl as $data)
                        {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: ['#4285F4', '#00C851', '#33b5e5', '#ffbb33'],
                    hoverBackgroundColor: ['#0d47a1', '#007E33', '#0099CC', '#FF8800'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    },
                    legend: {
                    display: false
                    },
                    cutoutPercentage: 80,
                },
            });

            // Pelaksaan UNBK
            var ctx = document.getElementById("unbk");
            var unbk = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Sudah", "Belum"],
                datasets: [{
                data: [
                    @foreach($unbk as $data)
                    {{ $data }},
                    @endforeach
                ],
                backgroundColor: ['#4285F4', '#00C851'],
                hoverBackgroundColor: ['#0d47a1', '#007E33'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                },
                legend: {
                display: false
                },
                cutoutPercentage: 80,
            },
            });

            // Pie Chart Jumlah siswa
            var ctx = document.getElementById("jumlahsiswa");
            var jumlahsiswa = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Laki-laki", "Perempuan"],
                    datasets: [{
                    data: [
                        @foreach($numberOfStudent as $data)
                        {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: ['#4285F4', '#00C851'],
                    hoverBackgroundColor: ['#0d47a1', '#007E33'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    },
                    legend: {
                    display: false
                    },
                    cutoutPercentage: 80,
                },
            });

            // Pie Chart Status Ketenagaan Guru 
            var ctx = document.getElementById("employmentStatus");
            var employmentStatus = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["PNS", "Non PNS"],
                    datasets: [{
                    data: [
                        @foreach($employmentStatus as $data)
                        {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: ['#4285F4', '#00C851'],
                    hoverBackgroundColor: ['#0d47a1', '#007E33'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    },
                    legend: {
                    display: false
                    },
                    cutoutPercentage: 80,
                },
            });
            
            // Pie Chart Status Pendidikan terakhir
            var ctx = document.getElementById("lastEducation");
            var lastEducation = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["SMA", "D1", "D2", "D3", "D4", "S1", "S2", "S3"],
                    datasets: [{
                    data: [
                        @foreach($lastEducation as $data)
                        {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: ['#4285F4', '#00C851', '#33b5e5', '#adb5bd', '#6c757d', '#212529', '#ffbb33', '#ff4444'],
                    hoverBackgroundColor: ['#0d47a1', '#007E33', '#0099CC', '#6c757d', '#000', '#000', '#FF8800', '#CC0000'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    },
                    legend: {
                    display: false
                    },
                    cutoutPercentage: 80,
                },
            });

            // Pie Chart Status Sertifikasi
            var ctx = document.getElementById("statusSertifikasiGuru");
            var statusSertifikasiGuru = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Sudah", "Belum"],
                    datasets: [{
                    data: [
                        @foreach($sertificationStatus as $data)
                        {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: ['#4285F4', '#00C851'],
                    hoverBackgroundColor: ['#0d47a1', '#007E33'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    },
                    legend: {
                    display: false
                    },
                    cutoutPercentage: 80,
                },
            });
            
            // Pie Chart Status Sertifikasi
            var ctx = document.getElementById("involvement_unbk");
            var involvement_unbk = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Sudah", "Belum"],
                    datasets: [{
                    data: [
                        @foreach($involvement_unbk as $data)
                        {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: ['#4285F4', '#00C851'],
                    hoverBackgroundColor: ['#0d47a1', '#007E33'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    },
                    legend: {
                    display: false
                    },
                    cutoutPercentage: 80,
                },
            });

            // Pie Chart Jumlah siswa
            var ctx = document.getElementById("jumlahguru");
            var jumlahguru = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Laki-laki", "Perempuan"],
                    datasets: [{
                    data: [
                        @foreach($jumlahguru as $data)
                        {{ $data }},
                        @endforeach
                    ],
                    backgroundColor: ['#4285F4', '#00C851'],
                    hoverBackgroundColor: ['#0d47a1', '#007E33'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    },
                    legend: {
                    display: false
                    },
                    cutoutPercentage: 80,
                },
            });


        })
        
    </script>
    @endsection
</x-app-layout>
