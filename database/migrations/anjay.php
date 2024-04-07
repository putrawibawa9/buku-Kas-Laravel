<?php

use App\Models\Category;

Category::create([
    [
        "category_id" => "K001",
        "category_name" => "Biaya honor PTK",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K002",
        "category_name" => "Biaya Operasional Lembaga",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K003",
        "category_name" => "Biaya Pembelian Media Pembelajaran",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K004",
        "category_name" => "Biaya Pengembangan Usaha",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K005",
        "category_name" => "Biaya Renovasi Ruangan",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K006",
        "category_name" => "Biaya Pemeliharaan",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K007",
        "category_name" => "Biaya Investasi Sarana",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K008",
        "category_name" => "Biaya Investasi Prasarana",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K009",
        "category_name" => "Biaya Investasi SDM",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K010",
        "category_name" => "Biaya Iuran BPJS Kesehatan",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K011",
        "category_name" => "Biaya BPJS Ketenagakerjaan",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K012",
        "category_name" => "Biaya Recruitment Dan Promosi",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K013",
        "category_name" => "Biaya Kegiatan CSR",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K014",
        "category_name" => "Biaya Pajak",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K015",
        "category_name" => "Bunga Bank",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K016",
        "category_name" => "Biaya Ujian Kompetensi",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "K017",
        "category_name" => "Iuran Desa",
        "category_type" => "outcome"
    ],
    [
        "category_id" => "P001",
        "category_name" => "Pembayaran Peserta Didik",
        "category_type" => "income"
    ],
    [
        "category_id" => "P002",
        "category_name" => "Pembayaran Modul-modul",
        "category_type" => "income"
    ],
    [
        "category_id" => "P003",
        "category_name" => "Lain-lain",
        "category_type" => "income"
    ]
]);





App\Models\Category::create(
    [
        "category_id" => "P003",
        "category_name" => "Lain-lain",
        "category_type" => "income"
    ]
    );