<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Ubiquiti UniFi Access Point',
            'slug' => 'ubiquiti-unifi-ap',
            'description' => 'Tingkatkan efisiensi jaringan Anda dengan Ubiquiti UniFi Access Point. Dirancang khusus untuk lingkungan yang membutuhkan koneksi stabil.',
            'specifications' => json_encode([
                'Model' => 'IEE 802.1ax',
                'Kecepatan' => '1800 Mbps',
                'Antena' => 'Multiple Input Multiple Output',
                'Port Interface' => 'Gigabit Ethernet'
            ]),
            'image' => 'unifi.jpg'
        ]);
    }
}