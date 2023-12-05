<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    {{-- form --}}
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2>Form Pengajuan Kendaraan</h2>
                <form action="/simpan" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kendaraan</label>
                        <select class="form-select" aria-label="Default select example" name="inputkendaraan">
                            <option selected disabled>pilih kendaraan</option>
                            <option value="1">Truk No.1</option>
                            <option value="2">Truk No.2</option>
                            <option value="3">Truk No.3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Driver</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Driver"
                            name="inputdriver">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Persetujuan</label>
                        <select class="form-select" aria-label="Default select example" name="inputuser">
                            <option selected disabled>pilih kepala bagian</option>
                            <option value="1">Daniel</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3" hidden>
                        <label for="exampleInputEmail1" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="inputstatus">
                            <option value="belum setujui">Belum Disetujui</option>
                            <option value="disetujui">Disetujui</option>
                            <option value="ditolak">Ditolak</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/">dashboard</a>
                </form>
            </div>
        </div>
    </div>
    {{-- end form --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
