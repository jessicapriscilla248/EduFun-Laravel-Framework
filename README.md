# EduFun-Laravel-Framework
## Routing
Routing berfungsi untuk menargetkan URL yang akan dijalankan dan fungsi (Controller) mana yang akan bertanggung jawab atas URL tersebut. Route ada di routes/web.php. Contoh routing yang ada pada file quiz saya:

```Route::get('/home', [HomeController::class, 'index'])->name('home');```

User akan akses page home, dengan bantuan Controller, dimana didalamnya sudah ada kelas ‘index’. Routing home diberikan nama ‘home’ agar mudah saat dipanggil. Begitupun route yang lain juga memiliki kegunaan yang sama dengan tanggung jawab page berbeda-beda.
<pre>Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');
Route::get('/article/{judul}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/writers', [WriterController::class, 'index'])->name('writers.index');
Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writers.show');
Route::get('/aboutUs', [AboutUsController::class, 'aboutUs'])->name('aboutUs');
Route::get('/popular', [PopularController::class, 'index'])->name('popular.index');</pre>

## Controller
Controller adalah sebagian kode program yang mengatur logika dan arus data. Disini menghubungkan antara model dan view. Contohnya ada pada HomeController.php, yang mana file ini bertanggung jawab mengambil data dari model Article dan Course, lalu mengirimkannya ke view ‘home.blade.php’.

## Model
Model adalah tempat dan logika data. Di dalam model ditentukan juga hubungan setiap table di database, seperti belongsTo() dan hasMany().
- Satu Writer bisa punya banyak Article berarti menggunakan hasMany.
- Satu Article hanya punya satu Writer berarti menggunakan belongsTo.

## View
View adalah kode yang bertugas menampilkan ke user. View ada banyak dan dikelompokkan menjadi beberapa folder. 
- ```resources/views/```
- ```resources/views/layout/```
- ```resources/views/writers/```
- dll

## Migration
Migration adalah sebagian kode yang bertugas membuat tabel yang ada di database. Contohnya pada tabel artikel yang saya buat:
<pre>Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Data Science, Network Security
            $table->timestamps();
        });</pre>
Terdiri dari kolom id course dan juga nama coursenya. Jadi seperti create table tapi di laravel dengan migration.

## Seeder
Seeder adalah fungsi yang dipakai untuk mengisi data ke tablenya. Contohnya seperti yang saya buat:
<pre>// 3 Data Science
        for($i=1; $i<=3; $i++){
            Article::create([
                'course_id' => 1,
                'writer_id' => $writers->random()->id,
                'judul' => $faker->sentence(1),
                'rangkuman' => $faker->paragraph(1),
                'konten' => $faker->paragraph(2)
            ]);
        }</pre>
Apa saja yang diperlukan dibantu dengan faker untuk diisi.


## Faker
Faker dipakai untuk membantu generate data palsu, jadi kita tidak perlu insert satu satu, sudah bisa dibantu dengan faker. Saya pakai faker yang ada source nya di github: https://github.com/fzaninotto/Faker 


## Hasil
Secara keseluruhan, website EduFun dengan framework laravel ini sudah berhasil dan tidak ada error. Berikut lampiran bukti screenshot saya telah mengerjakan website EduFun dan website telah berjalan dengan baik.

## Screenshot
<img src="public\img\bukti1.JPG" alt="Preview" width="500"/>
<img src="public\img\bukti2.JPG" alt="Preview" width="500"/>
<img src="public\img\bukti3.JPG" alt="Preview" width="500"/>
<img src="public\img\bukti4.JPG" alt="Preview" width="500"/>
<img src="public\img\bukti5.JPG" alt="Preview" width="500"/>
<img src="public\img\bukti6.JPG" alt="Preview" width="500"/>
<img src="public\img\bukti7.JPG" alt="Preview" width="500"/>
<img src="public\img\bukti8.JPG" alt="Preview" width="500"/>
<img src="public\img\bukti9.JPG" alt="Preview" width="500"/>





