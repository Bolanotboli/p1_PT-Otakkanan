<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            text-align: left;
        }
        header {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #ffa500 ; /* Add a bottom border */
        }
        nav {
            margin-top: 50px;
        }
        nav a {
            margin-right: 10px;
            text-decoration: none;
            color: #333;
        }
        textarea {
            width: 400px;
            height: 150px;
        }
        select {
            width: 150px;
            height: 20px;
        }
        input {
            width: 400px;
            height: 15px;
        }
        .readonly-input {
            background-color: #f0f0f0; /* Warna latar belakang */
            border: 4px solid #ccc; /* Gaya border */
            pointer-events: none; /* Tidak memperbolehkan interaksi dengan field */
        }
        form {
            max-width: 55%;
            margin: 0px;
            margin-top: 20px; /* Tambahkan margin di bagian atas formulir */
            padding: 20px;
            border: 1px solid #ddd; /* Tambahkan border untuk memberi jarak visual */
            border-radius: 8px;
        }
        
    </style>
</head>

<body>
    <header>
        <h1>@yield('header', 'Quotation')</h1>

    </header>
    
    <a href="/dashboard">
        <br>
        <img src="https://cdn-icons-png.flaticon.com/512/10079/10079366.png" alt="Home" style="height: 15px; width: auto;"/>  
        <font color="black"> HOME </font>
    </a>
        <font color="black"> <strong> > </strong></font>
        <font color="#808080"> <strong> Quotation </strong></font>

    <p><input type="" class="readonly-input" placeholder="Silahkan isi QUOTATION FORM berikut."></p>

    <form action="/form/submit_form" method="POST">
        @csrf
        <p>Semakin lengkap informasi yang anda berikan, semakin akurat biaya layanan yang dapat kami sampaikan</p>

        <label for="nama"><strong>Nama anda</strong> (<font color="red">wajib diisi</font>)</label><br>
        <input type="text" id="nama" name="nama" required> </p>
        
        <label for="email"><strong>Email</strong> (<font color="red">wajib diisi</font>)</label>
        <br>
        <input type="email" id="email" name="email" required> </p>

        <label for="no_telp"><strong>Nomor telepon / HP</strong> (<font color="red">wajib diisi</font>)</label>
        <br>
        <input type="text" id="no_telp" name="no_telp" required> </p>

        <label for="nama_perusahaan"><strong>Nama perusahaan</strong> (bila ada)</label>
        <br>
        <input type="text" id="nama_perusahaan" name="nama_perusahaan"> </p>

        <label for="alamat"><strong>Alamat lengkap</strong> (<font color="red">wajib diisi</font>)</label>
        <br>
        <textarea id="alamat" name="alamat" required></textarea> </p>

        <label for="nama"><strong>Website</strong> (bila ada)</label>
        <br>
        <input type="text" id="website" name="website"> </p>

        <label for="referensi_web"><strong>Referensi</strong> (bila ada contoh website yang anda inginkan)</label>
        <br>
        <input type="text" id="referensi_web" name="referensi_web"> </p>

        <label for="layanan"><strong>Layanan yang anda inginkan</strong> (<font color="red">silahkan pilih</font>)</label>
        <br>
        <select id="layanan" name="layanan">
            <option value="layanan1">Penjemputan</option>
            <option value="layanan2">Hot Meal</option>
            <option value="layanan3">Lain-lain</option>
            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
        </select>

        <p>

        <label for="budget"><strong>Estimasi budget / anggaran dana yang dialokasikan</strong> (<font color="red">silahkan pilih</font>)</label>
        <br>
        <select id="budget" name="budget">
            <option value="budget1">1 - 2 juta</option>
            <option value="budget2">5 - 9 ratus</option>
            <option value="budget3">Lain-lain</option>
            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
        </select>

        <p>

        <label for="feedback"><strong>Darimana anda mengetahui kami?</strong> (<font color="red">silahkan pilih</font>)</label>
        <br>
        <select id="feedback" name="feedback">
            <option value="feedback1">Instagram</option>
            <option value="feedback2">Facebook</option>
            <option value="feedback3">Twitter</option>
            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
        </select>

        <p>

        <label for="deskripsi"><strong>Catatan</strong> (silahkan isi informasi tambahan yang perlu anda sampaikan)</label>
        <br>
        <textarea id="deskripsi" name="deskripsi"></textarea>

        <!-- jQuery dari CDN -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                // Fungsi untuk menangani pengiriman formulir
                $('form').submit(function (e) {
                    e.preventDefault(); // Mencegah pengiriman formulir default

                    // Menggunakan AJAX untuk mengirim formulir tanpa mereload halaman
                    $.ajax({
                        type: 'POST',
                        url: '/form/submit_form', // Sesuaikan dengan URL pengiriman formulir Anda
                        data: $(this).serialize(), // Mengambil data formulir
                        success: function (response) {
                            // Menampilkan notifikasi sukses di dalam elemen dengan ID 'notification'
                            $('#notification').html('<div class="alert alert-success">' + response.success + '</div>');
                            // Mengosongkan formulir
                            $('form')[0].reset();
                        },
                        error: function (error) {
                            // Menampilkan pesan kesalahan di dalam elemen dengan ID 'notification'
                            $('#notification').html('<div class="alert alert-danger">' + response.error + '</div>');
                            // Mengosongkan formulir
                            $('form')[0].reset();
                        }
                    });
                    return false;
                });
            });
        </script>

        <p>

        <button type="submit">Kirim</button>
        <div id="notification"></div>
    </form>
    
</body>
</html>