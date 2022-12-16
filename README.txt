#Nama : Wilbert Bernard Lo
#NIM : 03081200027
#Mata Kuliah : Business Application Programming (BAP)

Soal:
No 1
Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin).

Jawaban:
Table yang ditambahkan adalah promo yang bisa diakses melalui http://127.0.0.1:8000/admin. Lalu di menu sidebar.  Dan file dapat dilihat di resource-> view->admin->promo.

No 2
Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan query view tersebut kedalam file queryUAS.sql(20poin).

Jawaban:
Query view yang dibuat adalah promo_berlaku yang bisa dilihat di http://127.0.0.1:8000/admin. Lalu di sidebar Promo berlaku. Dan query akan diberikan di github.

No 3
Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

Jawaban:
Cara melihatnya sama seperti di no 2 namun disini ada tambahan print yang jika ditekan akan menampilkan view dalam bentuk print.pdf, yang sudah dilengkapi dengan nama, nim, serta logo UPH. Letak file ada di resource->view->admin->promo_berlaku


No 4
Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

Jawaban:
Untuk Validasi bisa dilihat di controller promo di bagian store dan upade yaitu  
$validated = $request->validate([
            'name' => 'required|max:40',
        ]);
Yang artinya aama promo tidak boleh lewat dari 40.

No 5
Soal: Simpan kode program beserta queryUAS.sql ke public repository github.
Link Github: https://github.com/wilbertbl/UAS
