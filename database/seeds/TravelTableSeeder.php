<?php

use Illuminate\Database\Seeder;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Travel::insert(
        [
        		[
                	'nama' => 'Taman Bunga Wiladatika',
                	'alamat' => 'Jl. Jambore No.1, Harjamukti, Kec. Cimanggis, Kota Depok, Jawa Barat 13720',
                	'aksesKendaraan' => 'Mobil,Motor',
                	'jamBuka' => '08.00-16.00',
                	'gambar' => '',
                	'deskripsi' => 'Travel Destination05 Dec 20 | 19:30
									Info Wisata Taman Bunga Wiladatika: Rute, Lokasi, dan Harga Tiket
									Pilihan refreshing simpel di akhir pekan
									Info Wisata Taman Bunga Wiladatika: Rute, Lokasi, dan Harga 
									Keberadaan taman kota tentu sangat penting bagi suatu wilayah, karena bisa memberikan kesan sejuk dan nyaman dengan kualitas oksigen yang bagus. Salah satu taman legendaris di Indonesia adalah Taman Bunga Wiladatika.

									Taman yang terletak di Depok, Jawa Barat, ini diresmikan sejak 1980. Meski umurnya sudah puluhan tahun, bukan berarti taman bunganya bakal terkesan tak terawat. Taman rekreasi ini dibangun di lahan yang cukup luas, sehingga ada beberapa fasilitas seru yang bisa kamu nikmati. Salah satu ciri taman ini adalah pemandangannya yang asri.

									Terdapat dua taman yang bisa kamu jelajahi, yakni taman bunga dan taman jamur. Taman jamur sudah cukup terkenal, karena selalu jadi lokasi syuting beberapa sinetron dan film.

									Taman jamur dikelilingi pepohonan tinggi yang rindang, lengkap dengan beberapa bangku dan rumah berbentuk jamur yang unik. Sedangkan, taman bunga dipenuhi tanaman dengan bunga bermekaran.

									Warnanya taman bunga tampak lebih cantik, sehingga memanjakan mata banget. Ada lahan hijau di sini, kamu bisa sesekalli piknik sambil menggelar tikar.',
                	'harga' => '10.000',
                	'category_id' => '11',
                	'city_id' => '1',
                ],
                [
                	'nama' => 'Taman Wisata Pasir Putih',
                	'alamat' => 'Jl. Rw. Geni Raya No.1, RT.1/RW.7, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519',
                	'aksesKendaraan' => 'Mobil,Motor',
                	'jamBuka' => '09.00-17.00',
                	'gambar' => '',
                	'deskripsi' => 'Pasir Putih Depok bisa menjadi pilihan liburan keluarga yang menyenangkan. Terutama untuk warga Ibu Kota, pilihan wisata satu ini tentunya sangat menarik, karena selain cocok untuk keluarga, lokasinya juga tidak begitu jauh.

Taman Wisata Pasir Putih ini berlokasi di Sawangan, Depok, Jawa Barat. Tempat rekreasi ini menawarkan berbagai pengalaman bermain dan liburan bagi anak-anak maupun dewasa. Dengan harga tiket yang juga murah kamu bisa menikmati segala permainan yang disediakan.',
                	'harga' => '25.000',
                	'category_id' => '19',
                	'city_id' => '1',
                ],
                [
                	'nama' => 'Kawah Putih',
                	'alamat' => 'Jl. Raya Soreang Ciwidey, Ciwidey, Bandung, Jawa Barat 40973. Bandung',
                	'aksesKendaraan' => 'Mobil,Motor',
                	'jamBuka' => '07.00-17.00',
                	'gambar' => 'public/uploads/posts/1613068622bromo.jpg',
                	'deskripsi' => 'Kawah Putih Ciwidey Bandung seringkali diselimuti kabut tipis layaknya hawa pegunungan yang dingin. Posisinya yang terletak di Puncak Gunung Patuha Ciwidey menambah indah nuansa keindahannya. Pada waktu-waktu tertentu kabut tebal dapat turun menyelimuti dan menghalangi jarak pandang.

Objek wisata Kawah Putih Ciwidey Bandung ini salah satu tujuan wisata favorit dan sangat diminati wisatawan baik lokal maupun mancanegara. Pada hari libur biasa jumlah wisatawan perhari berkisar 2.500 – 4.000 orang. Sedangkan pada libur panjang jumlahnya dapat mencapai 8.000 orang perharinya.

Kawah Putih Ciwidey Bandung merupakan danau hasil letusan Gunung Patuha pada abad ke-10 dan ke-12. Kontur tanahnya berwarna putih yang terjadi secara alamiah dari endapan tuff (abu gunung api). Air danaunya berwarna putih jernih kehijauan.

Kawah Putih Ciwidey Bandung ini dikelilingi pasir putih dengan riak bertabur asap dan letupan lumpur hidup sesekali. Warna kawahnya dapat berubah sesuai kadar belerang, suhu, dan cuaca di sekitar area. Terkadang berwarna hijau apel, kebiru-biruan, coklat susu, hingga berwarna putih berkabut.

Di sini, di Kawah Putih Ciwidey Bandung, wisatawan akan mencium bau belerang yang kuat dari asap yang keluar dari kawahnya (tapi tidak sekuat dulu). Dengan tingkat keasaman tinggi di kisaran pH 0,5 – 1,3. Wisatawan dilarang berenang karena airnya kandungan sulfur yang sangat tinggi dapat membahayakan wisatawan.',
                	'harga' => '20.000',
                	'category_id' => '3',
                	'city_id' => '12',
                ],
                [
                	'nama' => '',
                	'alamat' => '',
                	'aksesKendaraan' => '',
                	'jamBuka' => '',
                	'gambar' => '',
                	'deskripsi' => '',
                	'harga' => '',
                	'category_id' => '',
                	'city_id' => '',
                ],
                [
                	'nama' => '',
                	'alamat' => '',
                	'aksesKendaraan' => '',
                	'jamBuka' => '',
                	'gambar' => '',
                	'deskripsi' => '',
                	'harga' => '',
                	'category_id' => '',
                	'city_id' => '',
                ],
                [
                	'nama' => '',
                	'alamat' => '',
                	'aksesKendaraan' => '',
                	'jamBuka' => '',
                	'gambar' => '',
                	'deskripsi' => '',
                	'harga' => '',
                	'category_id' => '',
                	'city_id' => '',
                ],
                
                	]
    );
    }
}
