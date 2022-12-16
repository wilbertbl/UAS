#Nama : Wilbert Bernard Lo
#NIM : 03081200027
#Mata Kuliah : Business Application Programming (BAP)

Soal:
#No 1
Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin).

Jawaban:
Table yang ditambahkan adalah promo Nama file yang ditambahkan dapat dilihat pada folder resources/views/admin/customer dengan nama file index.blade.php , create.blade.php , edit.blade.php , form.blade.php , show.blade.php. (Beserta Controller dan Modelnya)

#No 2
Soal:
Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan query view tersebut kedalam file queryUAS.sql(20poin).

Jawaban:
Query View tersebut dapat dilihat pada sidebar yang berjudul Sold Product atau dapat dicek melalui http://127.0.0.1:8000/admin/sold. Untuk file queryUAS.sql terlampir pada repository Github.

#No 3
Soal: 
Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

Jawaban:
Seperti nomor 2, Query View dapat di cek pada http://127.0.0.1:8000/admin/sold yang dimana terdapat button Print PDF. Laporan itu akan digenerate menjadi Laporan PDF dan akan otomatis terdownload. Nama file yang ditambahkan dapat dilihat pada folder resources/views/admin/sold dengan nama file index.blade.php dan print_pdf.blade.php (Beserta Controller dan Modelnya)


#No 4
Soal:
Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

Jawaban:
Untuk Validasi bisa dilihat di controller promo di bagian store dan upade yaitu  
$validated = $request->validate([
            'name' => 'required|max:40',
        ]);
Yang artinya aama promo tidak boleh lewat dari 40.

No 5
Soal: Simpan kode program beserta queryUAS.sql ke public repository github.
Link Github-nya: