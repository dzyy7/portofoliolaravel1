<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $layanan = [
            [
                'title' => 'Aplikasi Web',
                'description' => 'Solusi aplikasi web custom untuk kebutuhan bisnis Anda',
                'icon' => 'fas fa-globe'
            ],
            [
                'title' => 'Aplikasi Mobile',
                'description' => 'Pengembangan aplikasi mobile Android dan iOS',
                'icon' => 'fas fa-mobile-alt'
            ],
            [
                'title' => 'Sistem ERP',
                'description' => 'Sistem manajemen terintegrasi untuk efisiensi operasional',
                'icon' => 'fas fa-cogs'
            ]
        ];

        $portofolio = [
            [
                'title' => 'Sistem Manajemen Siswa',
                'description' => 'web manajemen siswa satu sekolah terintegrasi',
                'image' => 'https://dzyy7.github.io/personalweb/asset/student-data.png',
                'tech' => ['Laravel', 'MySQL']
            ],
            [
                'title' => 'Playvies',
                'description' => 'Aplikasi ini menampilkan koleksi film, dan pengguna dapat menambahkan film ke daftar favorit.',
                'image' => 'https://dzyy7.github.io/personalweb/asset/Playvies.png',
                'tech' => ['Flutter', 'Dart']
            ],
            [
                'title' => 'Animeku',
                'description' => 'Aplikasi untuk menampilkan data anime, Memungkinkan pengguna untuk menjelajahi dan menemukan berbagai judul dengan antarmuka yang bersih dan responsif.',
                'image' => 'https://dzyy7.github.io/personalweb/asset/Animeku.jpeg',
                'tech' => ['Flutter', 'Rest API', 'Dart']
            ]
        ];

        return view('home', compact('layanan', 'portofolio'));
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function portofolio()
    {
        return view('portofolio');
    }
}
