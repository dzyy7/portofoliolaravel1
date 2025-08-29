<?php

namespace App\Http\Controllers;

use App\Models\PortofolioModel;
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

        $portofolio = PortofolioModel::latest(3);

        return view('home', compact('layanan', 'portofolio'));
    }




}
