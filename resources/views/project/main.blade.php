<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel CRUD</title>
</head>
<body>
    <input type="checkbox" id="check">
    <div class="navb">
        <label for="check">
            <i class='bx bx-list-ul' id="sidebar_btn"></i>
        </label>
        <div class="left-area">
            <h3>Laravel <span>CRUD</span></h3>
        </div>
        <div class="right-area">
            <a href="" class="button"> <i class='bx bx-log-out'></i> </a>
        </div>
    </div>

    <div class="sidebar">
        <div class= "img">
            <img src="../image/saya.jpg" alt="">
            <h4 class="name">Doly Prahoro</h4>
        </div>
        </hr>
        <div class="line">
            <a href=""><i class='bx bxs-dashboard'></i><span>Dashboard</span></a>
            <a href=""><i class='bx bxs-user'></i><span>Mahasiswa</span></a>
        </div>
    </div>

    <!-- Table -->
    <div class="content">
        @if(session ('sukses'))
            <div class="alert alert-success" role="alert">
                {{session ('sukses')}}
            </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h3 class="title-name">Data Mahasiswa</h3>
            </div>
            <div class="col-6">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class='bx bx-plus-medical'></i>
                Tambah Data Mahasiswa
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="project/create" method="POST">
                                {{csrf_field()}}
                                <div class="mb-3">
                                    <label for="exampleInputNama1" class="form-label">Nama lengkap</label>
                                    <input name="nama" type="name" class="form-control" id="exampleInputNama1" aria-describedby="emailHelp" placeholder="masukan Nama">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNim" class="form-label">NIM</label>
                                    <input name= "nim" type="name" class="form-control" id="exampleInputNim" aria-describedby="emailHelp" placeholder="masukan nim">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputJurusan" class="form-label">JURUSAN</label>
                                    <select name="jurusan" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih jurusan</option>
                                        <option value="Sistem Informasi">Sistem informasi</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                        <option value="Hukum">Hukum</option>
                                        <option value="Psikologi">Psikologi</option>
                                        <option value="Elektronik">Elektronik</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Manajemen">Manajemen</option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Pariwisata">Pariwisata</option>
                                        <option value="Teknologi Hasil Pertanian">Teknologi Hasil Pertaniana</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputFakultas" class="form-label">FAKULTAS</label>
                                    <select name="fakultas" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Fakultas</option>
                                        <option value="Fakultas Hukum">Fakultas Hukum</option>
                                        <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                                        <option value="Fakultas Teknik">Fakultas Teknik</option>
                                        <option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
                                        <option value="Fakultas TIK">Falkutas TIK</option>
                                        <option value="Fakultas Psikolog">Fakultas Psikologi</option>
                                        <option value="Fakultas Teknologi Pertanian">Fakultas Pertanian</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNim" class="form-label">IPK</label>
                                    <input name= "ipk" type="name" class="form-control" id="exampleInputNim" aria-describedby="emailHelp" placeholder="masukan ipk">
                                </div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
            
            <table class="table table-dark table-hover">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>JURUSAN</th>
                    <th>FAKULTAS</th>
                    <th>IPK</th>
                    <th>Aksi</th>
                </tr>

                @foreach($db_mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td>{{$mhs->fakultas}}</td>
                    <td>{{$mhs->ipk}}</td>
                    <td>
                        <a href="/project/{{$mhs->id}}/edit" class="btn btn-warning btn-sm" title="edit"><i class='bx bxs-edit-alt'></i></a>
                        <a href="/project/{{$mhs->id}}/delete" class="btn btn-danger btn-sm" title="delete" onclick="return confirm('anda yakin ingin menghapus?')"><i class='bx bxs-trash'></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>