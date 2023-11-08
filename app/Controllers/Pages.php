<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Coco Igniter',
            'tes' => ['satu', 'dua', 'tiga'],
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Coco'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Cocontact',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. ABC No. 123',
                    'kota' => 'Bjb'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Land Of Dawn',
                    'kota' => 'Mobile Legends'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
