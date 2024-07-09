<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanans')->insert([
            [
                'nama_layanan' => 'HSI B2B Bisnis Unlimited',
                'detail' => 'Koneksi internet cepat dan stabil untuk bisnis dengan rasio
                kecepatan 1:1 dan tanpa batas FUP',
                'kategoris_id' => 1
            ],
            [
                'nama_layanan' => 'Netmonk Monitoring Jaringan',
                'detail' => 'Pantau status & kondisi jaringan HSI B2B melalui dashboard monitoring
                secara real-time dan proaktif',
                'kategoris_id' => 1,
            ],
            [
                'nama_layanan' => 'Antares IoT Solutions',
                'detail' => 'Rangkaian solusi Internet of Things unggulan untuk transformasi efisiensi dan
                produktivitas bisnis',
                'kategoris_id' => 1,
            ],
            [
                'nama_layanan' => 'Antares Eazy Rekaman CCTV',
                'detail' => 'Layanan penyimpanan rekaman CCTV yang aman dan mudah diakses dengan teknologi
                Cloud Telkom',
                'kategoris_id' => 2,
            ],
            [
                'nama_layanan' => 'Pijar Manajemen Sekolah',
                'detail' => 'Platform digital untuk mempermudah manajemen sekolah seperti pengelolaan
                absensi, ujian, dan buku digital',
                'kategoris_id' => 2,
            ],
            [
                'nama_layanan' => 'Kursus Bisnis Pijar Mahir',
                'detail' => 'Pelatihan bisnis online dan offline mulai dari bebas biaya hingga
                pelatihan premium berbayar',
                'kategoris_id' => 3,
            ],
            [
                'nama_layanan' => 'OCA Message Blast',
                'detail' => 'Kirim pesan ke banyak pelanggan secara bersamaan di berbagai channel seperti
                WhatsApp, SMS, Email dan IVR',
                'kategoris_id' => 4,
            ],
            [
                'nama_layanan' => 'BigBox Analitik E-Commerce',
                'detail' => 'Analisis penjualan, pendapatan, tren produk, dan persaingan di berbagai e-marketplace
                dari satu platform',
                'kategoris_id' => 4,
            ],
            [
                'nama_layanan' => 'BigBox Analitik Media Sosial',
                'detail' => 'Platform digital untuk analisis tingkatan kinerja media sosial dan memaksimalkan potensi bisnis Anda',
                'kategoris_id' => 4,
            ],
            [
                'nama_layanan' => 'OCA WhatsApp Business API',
                'detail' => 'Peningkatan kredibilitas kanal komunikasi melalui WhatsApp Business dengan centang hijau resmi',
                'kategoris_id' => 4,
            ],
            [
                'nama_layanan' => 'OCA Chatbot Builder',
                'detail' => 'Layanan chatbot tanpa koding yang mudah dibuat untuk berinteraksi 24/7 dengan pelanggan Anda',
                'kategoris_id' => 4,
            ],
            [
                'nama_layanan' => 'OCA Customer Engagement Platform',
                'detail' => 'Dashboard untuk kelola komunikasi bersama pelanggan lewat SMS, Email, WhatsApp dan media sosial lainnya',
                'kategoris_id' => 4,
            ],
            [
                'nama_layanan' => 'OCA Customer Relationship Management',
                'detail' => 'Peningkatan kredibilitas kanal komunikasi melalui WhatsApp Business dengan centang hijau resmi',
                'kategoris_id' => 4,
            ],
        ]);
    }
}
