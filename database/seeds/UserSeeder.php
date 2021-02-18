<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider')->insert([
        	'foto' => 'slide1.jpg',
        ]);
        DB::table('slider')->insert([
        	'foto' => 'slide2.jpg',
        ]);
        DB::table('category')->insert([
            'id' => '1',
            'name' => 'Teknologi',
        ]);
        DB::table('category')->insert([
            'id' => '2',
            'name' => 'Sport',
        ]);
        DB::table('category')->insert([
            'id' => '3',
            'name' => 'Travel',
        ]);
        DB::table('category')->insert([
            'id' => '4',
            'name' => 'Pemerintah',
        ]);
        DB::table('news')->insert([
        	'judul' => 'Bupati Lantik 297 Pejabat Fungsional Pemkab Nganjuk Secara Virtual',
        	'isi' => '<p>Pelantikan pejabat fungsional di tengah pandemi Covid 19 yang dilakukan Pemerintah Kabupaten Nganjuk sedikit berbeda dari pelantikan pejabat seperti biasanya. Prosesi pelantikan dan pengambilan sumpah pejabat fungsional digelar Pendopo Pemkab Nganjuk, Rabu (23/09/2020). Dengan tetap memperhatikan physical social distancing dan protokol kesehatan, kursi peserta yang akan dilantik disusun dengan menjaga jarak. Ada sekitar 297 Pejabat fungsional Pemkab Nganjuk yang dilantik pada hari ini oleh Bupati Nganjuk H. Novi Rahman Hidhayat, S.Sos,MM. Pelantikan dan pengambilan sumpah pejabat fungsional serta penandatanganan berita acara disaksikan oleh Inspektur Daerah Nganjuk Dan Asisten Adminstrasi Umum. </p><br> <p>Pelantikan dan pengambilan sumpah tidak dilaksanakan di satu tempat saja, seperti tahun sebelumnya. Tetapi acara pelantikan hari ini, dilaksanakn di 5 lokasi yakni di Dinas Kesehatan, RSUD Nganjuk, SMPN 6 Nganjuk SMPN 1 Tanjunganom dan Pendopo Pemkab Nganjuk secara virtual. Prosesi pelantikannya terpusat di Pendopo Pemkab Nganjuk. Para pejabat fungsional yang dilantik dari unsur asisten apoteker 1 orang, apoteker 1 orang, auditor 2 orang, Bidan 53 orang, Dokter 14 orang, Dokter Gigi 4 orang, Guru 97 orang, Nutrisionis 4 orang Pengawas Pemerintahan 1 orang, Pengawas Sekolah 5 orang, Pengelola barang dan jasa 9 orang, Penyuluh Kesehatan Masyarakat 1 orang, Penyuluh Pertanian 14 orang, Perawat 80 orang Pranata Laboratorium Kesehatan 4 orang, Radiographer 6 orang dan Medicveteriner 1 orang. Dalam sambutannya Bupati Novi berpesan kepada pejabat fungsional, agar meriview ulang sebagai abdi negara yang bertanggung jawab langsung kepada Pejabat Tinggi Pratama. " Dengan sumpah janji yang baru saja diucapkan berarti saudara siap melaksanakan tugas secara betul demi menjalankan dan membantu pemerintah kabupaten untuk melayani masyarakat,  Tegas Mas Novi, sapaan akrab Bupati Nganjuk. </p><br> <p>Lebih lanjut Mas Novi menambahkan selain ASN melayani masyarakat, sebagai seorang abdi negara juga harus bisa menjadi pemersatu bangsa. "Oleh karena itu, laksanakan fungsi tersebut sebagai pedoman untuk menjalankan tugasn secara mandiri dan terukur,  tambahnya. Sementara itu, dalam laporannya Kepala BKD Nganjuk Drs. Shopingi, A.P, M.M menyampaikan bahwa pelantikan berdasarkan UU No. 05 Tahun 2015 tentang Aparatur Sipil Negara, Peraturan Pemerintah No. 11 Tahun 2017 tentang Manajemen Pegawai Negeri Sipil dan Peraturan BKN No.07 Tahun 2017 tentang Tata Cara Pelantikan dan Pengambilan Sumpah Pejabat Fungsional. </p>',
        	'gambar' => 'berita3.jpeg',
        	'id_category' => '4',
        ]);
        DB::table('news')->insert([
        	'judul' => 'Bupati Nganjuk Hadiri Rapat Badan Anggaran DPRD Kabupaten Nganjuk',
        	'isi' => '<p>Bupati Nganjuk H. Novi Rahman Hidhayat, S.Sos,MM hadiri rapat paripurna DPRD Kabupaten Nganjuk tentang laporan hasil pembahasan Badan Anggaran (Banggar), Kebijakan Umum Anggaran (KUA) dan Prioritas serta Plafon Anggaran Sementara (PPAS) Perubahan Anggaran Pendapatan dan Belanja Daerah (P-APBD) Kabupaten Nganjuk Tahun Anggaran 2020. Bertempat di Ruang Rapat Paripurna DPRD Kabupaten Nganjuk dilakukan penandatanganan (teken) Nota Kesepakatan Bersama antara Pemkab Nganjuk dengan DPRD Kabupaten Nganjuk. Senin (31/08/2020). Nota kesepakatan tersebut ditandatangani langsung oleh Bupati Nganjuk H. Novi Rahman Hidhayat, S.Sos,MM dan Ketua DPRD Kabupaten Nganjuk Tatit Heru Tjahjono, Amd. Penandatanganan ini diawali dengan penyampaian Laporan Banggar yang dibacakan oleh Ketua Fraksi Nasdem PPP (anggota Banggar) Kabupaten Nganjuk Moh. Imron, S.PdI. </p><br><p>Dalam laporan banggar tersebut disebutkan bahwa Kebijakan Umum Anggaran (KUA) dan Prioritas serta Plafon Anggaran Sementara (PPAS) tahun anggaran 2020 disusun sesuai respon terhadap perubahan proyeksi APBD tahun 2020.</p>',
        	'gambar' => 'berita4.jpeg',
        	'id_category' => '4',
        ]);
    	DB::table('galeri')->insert([
        	'foto' => '1.jpg',
        ]);
    	DB::table('galeri')->insert([
        	'foto' => '2.jpg',
        ]);
    	DB::table('galeri')->insert([
        	'foto' => '3.jpg',
        ]);
    	DB::table('galeri')->insert([
        	'foto' => '4.jpg',
        ]); 
    	DB::table('galeri')->insert([
        	'foto' => '5.jpg',
        ]);  
    	DB::table('galeri')->insert([
        	'foto' => '6.jpg',
        ]);         
    	DB::table('galeri')->insert([
        	'foto' => '7.jpg',
        ]);  
    	DB::table('galeri')->insert([
        	'foto' => '8.jpg',
        ]); 
    }
}
