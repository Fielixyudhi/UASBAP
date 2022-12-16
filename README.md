## Data Diri | UJIAN AKHIR SEMESTER (UAS)
Nama        : Fielix Yudhianto
Nim         : 03081200033
Kelas       : 20SI2
Mata Kuliah : Business Application Programming (BAP)

## No 1
Soal:
Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin).

## No 2
Soal:
Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan query view tersebut kedalam file queryUAS.sql(20poin).

Jawaban:
file queryUAS.sql terlampir pada repository Github dan folder.

## No 3
Soal: 
Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

Jawaban:
Query View dapat di cek pada http://127.0.0.1:8000/admin/listfeed yang dimana terdapat button Print PDF. Laporan itu digenerate menjadi PDF dan akan terdownload secara otomatis. 


## No 4
Soal:
Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

Jawaban:

            $validated = $request->validate([
                'name' => 'required|max:50',
                'phone' => 'numeric'
            ]);

## No 5
Soal: Simpan kode program beserta queryUAS.sql ke public repository github.
Link Github: 