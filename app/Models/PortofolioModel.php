<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortofolioModel 
{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Sistem Manajemen Siswa',
                'description' => 'Web manajemen siswa satu sekolah terintegrasi dengan fitur lengkap untuk administrasi sekolah',
                'image' => 'https://dzyy7.github.io/personalweb/asset/student-data.png',
                'tech' => ['Laravel', 'MySQL', 'Taildwind CSS'],
                'category' => 'Web Application',
                'client' => 'Personl Project',
                'year' => '2024',
                'status' => 'Completed'
            ],
            [
                'id' => 2,
                'title' => 'Playvies',
                'description' => 'Aplikasi mobile untuk menampilkan koleksi film dengan fitur favorit dan rating pengguna',
                'image' => 'https://dzyy7.github.io/personalweb/asset/Playvies.png',
                'tech' => ['Flutter', 'Dart', 'SQLite'],
                'category' => 'Mobile Application',
                'client' => 'Personal Project',
                'year' => '2023',
                'status' => 'Completed'
            ],
            [
                'id' => 3,
                'title' => 'Animeku',
                'description' => 'Aplikasi untuk menampilkan data anime dengan antarmuka yang bersih dan responsif',
                'image' => 'https://dzyy7.github.io/personalweb/asset/Animeku.jpeg',
                'tech' => ['Flutter', 'Rest API', 'Dart'],
                'category' => 'Mobile Application',
                'client' => 'Personal Project',
                'year' => '2023',
                'status' => 'Completed'
            ],
            [
                'id' => 4,
                'title' => 'AnimekuPlay',
                'description' => 'Aplikasi untuk menonton anime',
                'image' => 'https://raw.githubusercontent.com/dzyy7/personalweb/refs/heads/main/asset/AnimekuPlay.png',
                'tech' => ['Flutter', 'Dart', 'Rest API'],
                'category' => 'Mobile Application',
                'client' => 'Personal Project',
                'year' => '2025',
                'status' => 'On Progress'
            ],
            [
                'id' => 5,
                'title' => 'Personal Website',
                'description' => 'Website pribadi untuk menampilkan portofolio',
                'image' => 'https://raw.githubusercontent.com/dzyy7/personalweb/refs/heads/main/asset/image.png',
                'tech' => ['HTML', 'CSS', 'JavaScript'],
                'category' => 'Web Application',
                'client' => 'Personal Project',
                'year' => '2025',
                'status' => 'Completed'
            ],
            [
                'id' => 6,
                'title' => 'Ocean Learn',
                'description' => 'Aplikasi pengelolaan bimbingan belajar',
                'image' => 'https://dzyy7.github.io/personalweb/asset/OceanLearn.png',
                'tech' => ['Flutter', 'Laravel', 'Dart'],
                'category' => 'Mobile Application',
                'client' => 'Momentum English Course',
                'year' => '2025',
                'status' => 'Completed'
            ]
        ];
    }

    public static function find($id)
    {
        $portofolio = collect(self::all());
        return $portofolio->firstWhere('id', $id);
    }

    public static function latest($limit = null)
    {
        $portofolio = collect(self::all());

        if ($limit) {
            return $portofolio->take($limit)->all();
        }

        return $portofolio->all();
    }

    public static function byCategory($category)
    {
        $portofolio = collect(self::all());
        return $portofolio->where('category', $category)->all();
    }
}
