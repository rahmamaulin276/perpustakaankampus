<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'nama_kategori' => 'Teknologi',
            'deskripsi' => 'Kategori buku tentang teknologi dan pemrograman'
        ]);

        Category::create([
            'nama_kategori' => 'Novel',
            'deskripsi' => 'Kategori buku cerita dan fiksi'
        ]);

        Category::create([
            'nama_kategori' => 'Pendidikan',
            'deskripsi' => 'Kategori buku pelajaran dan akademik'
        ]);
    }
}