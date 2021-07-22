<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Halaman Edit</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
            <h3 class="title-name"><strong> Edit Mahasiswa </strong></h3>
            <form action= "/project/{{$data->id}}" method="POST"> 
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="mb-3">
                    <label for="exampleInputNama1" class="form-label">Nama lengkap</label>
                    <input name="nama" type="name" class="form-control" id="exampleInputNama1" aria-describedby="emailHelp" placeholder="masukan Nama" value="{{$data->nama}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputNim" class="form-label">NIM</label>
                    <input name= "nim" type="name" class="form-control" id="exampleInputNim" aria-describedby="emailHelp" placeholder="masukan nim" value="{{$data->nim}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputJurusan" class="form-label">JURUSAN</label>
                    <select name="jurusan" class="form-select" aria-label="Default select example">
                        <option selected>Pilih jurusan</option>
                        <option value="Sistem Informasi" @if($data->jurusan == 'Sistem informasi') selected @endif>Sistem informasi</option>
                        <option value="Teknik Informatika" @if($data->jurusan == 'Teknik Informatika') selected @endif>Teknik Informatika</option>
                        <option value="Ilmu Komunikasi" @if($data->jurusan == 'Ilmu Komunikasi') selected @endif>Ilmu Komunikasi</option>
                        <option value="Hukum" @if($data->jurusan == 'Hukum') selected @endif>Hukum</option>
                        <option value="Psikologi" @if($data->jurusan == 'Psikologi') selected @endif>Psikologi</option>
                        <option value="Elektronik" @if($data->jurusan == 'Elektronik') selected @endif>Elektronik</option>
                        <option value="Teknik Sipil" @if($data->jurusan == 'Teknik Sipil') selected @endif>Teknik Sipil</option>
                        <option value="Manajemen" @if($data->jurusan == 'Manajemen') selected @endif>Manajemen</option>
                        <option value="Akuntansi" @if($data->jurusan == 'Akuntansi') selected @endif>Akuntansi</option>
                        <option value="Pariwisata" @if($data->jurusan == 'Pariwisata') selected @endif>Pariwisata</option>
                        <option value="Teknologi Hasil Pertanian" @if($data->jurusan =='Teknologi Hasil Pertanian') selected @endif>Teknologi Hasil Pertaniana</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputFakultas" class="form-label">FAKULTAS</label>
                    <select name="fakultas" class="form-select" aria-label="Default select example">
                        <option selected>Pilih Fakultas</option>
                        <option value="Fakultas Hukum" @if($data->fakultas == 'Fakultas Hukum') selected @endif>Fakultas Hukum</option>
                        <option value="Fakultas Ekonomi" @if($data->fakultas == 'Fakultas Ekonomi') selected @endif>Fakultas Ekonomi</option>
                        <option value="Fakultas Teknik" @if($data->fakultas == 'Fakultas Teknik') selected @endif>Fakultas Teknik</option>
                        <option value="Fakultas Teknologi Pertanian" @if($data->fakultas == 'Fakultas Teknologi Pertanian') selected @endif>Fakultas Teknologi Pertanian</option>
                        <option value="Fakultas Teknologi Informasi & Komunikasi" @if($data->fakultas == 'Fakultas Teknologi Informasi & Komunikasi') selected @endif>Falkutas TIK</option>
                        <option value="Fakultas Psikolog" @if($data->fakultas == 'Fakultas Psikolog') selected @endif>Fakultas Psikologi</option>
                        <option value="Fakultas Teknologi Pertanian" @if($data->fakultas == 'Fakultas Teknologi Pertanian') selected @endif>Fakultas Pertanian</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputNim" class="form-label">IPK</label>
                    <input name= "ipk" type="name" class="form-control" id="exampleInputNim" aria-describedby="emailHelp" placeholder="masukan ipk" value="{{$data->ipk}}">
                </div>
                <a href="/project" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
    </div>    
</body>
</html>