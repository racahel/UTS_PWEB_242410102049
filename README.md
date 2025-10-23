Mini-Projek UTS PWEB: GreenLeaf 🌿
Ini adalah projek mini yang dibuat untuk memenuhi Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web.

Nama Proyek : GreenLeaf 
Tema : Dashboard admin sederhana untuk pengelolaan data toko tanaman hias. 
Teknologi : Laravel & Bootstrap 5

Ketentuan Teknis
Projek ini dibuat tanpa menggunakan starter kit (seperti Breeze/Jetstream) dan tidak terhubung ke database. Semua data dikelola secara statis.

Fitur utama yang diimplementasikan :

1. Routing & Controller : Semua halaman (Login, Dashboard, Pengelolaan, Profile) di-render melalui PageController.

2. Blade Layouting : Menggunakan layout master (app.blade.php), components (<x-navbar/>, <x-footer/>), serta direktif @extends, @section, dan @yield.

3. Pengiriman Request Parameter : Mensimulasikan sesi login dengan mengambil username dari form dan mengirimkannya sebagai query parameter (?username=...) ke halaman Dashboard     dan Profile.

4. Looping Data Array : Halaman "Pengelolaan" menampilkan daftar data tanaman yang diambil dari array statis yang didefinisikan di dalam PageController.
