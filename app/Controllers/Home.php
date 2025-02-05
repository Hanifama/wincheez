<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home', [
            'navbar' => view('partials/navbar'),
            'productSlider' => view('partials/productSlider'),
            'heroSection' => view('partials/heroSection'),
            'bannerSection' => view('partials/bannerSection'),
            'featureSection' => view('partials/featureSection'),
            'introductionSection' => view('partials/introductionSection'),
            'sosmedSection' => view('partials/sosmedSection'),
            'bannerTempSection' => view('partials/bannerTempSection'),
            'featuredCreationSection' => view('partials/featuredCreationSection'),
            'footer' => view('partials/footer')
        ]);
    }

    public function detailProduct($id)
    {
        $products = [
            1 => [
                'name' => 'WINCheez Mozzarella Extra Stretch 150gr',
                'description' => 'Kualitas terbaik, expired panjang, cocok untuk usaha.',
                'price' => 'Rp 22,181',
                'image' => '/assets/images/produk-1.png',
                'thumbnails' => [
                    '/assets/images/produk-1.png',
                    '/assets/images/produk-1.png',
                    '/assets/images/produk-1.png',
                    '/assets/images/produk-1.png'
                ],
                'variations' => [
                    'Pilih Variasi Produk',
                    '1 Slop (2kg)',
                    '1 Ctn (8 Slop)',
                    '1 Ctn (16kg)'
                ],
                'storage_suggestion' => 'Simpan di tempat kering dan sejuk',
                'serving_suggestion' => 'Dapat dikonsumsi langsung atau diolah',
                'certifications' => [
                    'Nomor MD' => '123456789',
                    'No Sertifikat Halal' => '987654321'
                ]
            ],
            2 => [
                'name' => 'Produk B',
                'description' => 'Produk berkualitas premium dengan harga bersaing.',
                'price' => 'Rp 150.000',
                'image' => '/assets/images/produk-2.png',
                'thumbnails' => [
                    '/assets/images/thumb-4.png',
                    '/assets/images/thumb-5.png',
                    '/assets/images/thumb-6.png'
                ],
                'variations' => [
                    '1 Slop (2.5kg)',
                    '1 Ctn (10 Slop)',
                    '1 Ctn (20kg)'
                ],
                'storage_suggestion' => 'Simpan di tempat sejuk dan terhindar dari sinar matahari langsung',
                'serving_suggestion' => 'Dapat dikonsumsi dengan kopi atau teh',
                'certifications' => [
                    'Nomor MD' => '234567890',
                    'No Sertifikat Halal' => '876543210'
                ]
            ],
            3 => [
                'name' => 'Produk C',
                'description' => 'Pilihan terbaik untuk kebutuhan harian Anda.',
                'price' => 'Rp 200.000',
                'image' => '/assets/images/produk-3.png',
                'thumbnails' => [
                    '/assets/images/thumb-7.png',
                    '/assets/images/thumb-8.png',
                    '/assets/images/thumb-9.png'
                ],
                'variations' => [
                    '1 Slop (3kg)',
                    '1 Ctn (12 Slop)',
                    '1 Ctn (24kg)'
                ],
                'storage_suggestion' => 'Simpan di tempat dengan suhu ruangan',
                'serving_suggestion' => 'Cocok untuk dikonsumsi kapan saja',
                'certifications' => [
                    'Nomor MD' => '345678901',
                    'No Sertifikat Halal' => '765432109'
                ]
            ]
        ];
        
        if (!isset($products[$id])) {
            return redirect()->to('/'); 
        }

        return view('detailProduct', [
            'navbar' => view('partials/navbar'),
            'product' => $products[$id],
            'footer' => view('partials/footer')
        ]);
    }

    public function detailArticle()
    {
        return view('detailArticle');
    }
}
