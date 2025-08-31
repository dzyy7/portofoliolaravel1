<?php

namespace App\Http\Controllers;

use App\Models\PortofolioModel;
use Illuminate\Http\Request;

class PortofolioController extends Controller
    {
    public function index()
    {
        $portofolio = PortofolioModel::all();
        $categories = array_unique(array_column($portofolio, 'category'));

        return view('portofolio', compact('portofolio', 'categories'));
    }

    public function show($id)
    {
        $project = PortofolioModel::find($id);

        if (!$project) {
            abort(404);
        }

        // Ambil proyek terkait (selain proyek yang sedang dilihat)
        $relatedProjects = collect(PortofolioModel::all())
            ->reject(function($item) use ($id) {
                return $item['id'] == $id;
            })
            ->take(3)
            ->all();

        return view('portofolio-detail', compact('project', 'relatedProjects'));
    }
}
