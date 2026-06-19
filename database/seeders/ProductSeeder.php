<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $sellerId = User::where('email', 'seller@minishop.com')->value('id');
        $now = now();

        $products = [
            [
                'name' => 'Premium Wireless ANC Headphones Model X',
                'price' => 129.00,
                'original_price' => 215.00,
                'discount_percentage' => 40,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=500&auto=format&fit=crop',
                'stock' => 15,
                'category' => 'Electronics',
            ],
            [
                'name' => 'Minimalist Smart Watch Series 5',
                'price' => 89.99,
                'original_price' => 119.99,
                'discount_percentage' => 25,
                'image_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=500&auto=format&fit=crop',
                'stock' => 45,
                'category' => 'Electronics',
            ],
            [
                'name' => 'Retro Instant Camera Mini',
                'price' => 59.00,
                'original_price' => 70.00,
                'discount_percentage' => 15,
                'image_url' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=500&auto=format&fit=crop',
                'stock' => 12,
                'category' => 'Electronics',
            ],
            [
                'name' => 'Pro Runner Velocity Sneakers',
                'price' => 65.00,
                'original_price' => 130.00,
                'discount_percentage' => 50,
                'image_url' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=500&auto=format&fit=crop',
                'stock' => 88,
                'category' => 'Apparel',
            ],
            [
                'name' => 'Ergonomic Gaming Chair Pro',
                'price' => 199.00,
                'original_price' => 250.00,
                'discount_percentage' => 20,
                'image_url' => 'https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?q=80&w=500&auto=format&fit=crop',
                'stock' => 20,
                'category' => 'Furniture',
            ],
            [
                'name' => 'Mechanical RGB Keyboard',
                'price' => 145.00,
                'original_price' => null,
                'discount_percentage' => null,
                'image_url' => 'https://images.unsplash.com/photo-1595225476474-87563907a212?q=80&w=500&auto=format&fit=crop',
                'stock' => 34,
                'category' => 'Electronics',
            ],
            [
                'name' => 'Hydrating Facial Serum 30ml',
                'price' => 24.50,
                'original_price' => 35.00,
                'discount_percentage' => 30,
                'image_url' => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=500&auto=format&fit=crop',
                'stock' => 150,
                'category' => 'Beauty',
            ],
            [
                'name' => 'Ceramic Coffee Mug Set',
                'price' => 32.00,
                'original_price' => null,
                'discount_percentage' => null,
                'image_url' => 'https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?q=80&w=500&auto=format&fit=crop',
                'stock' => 60,
                'category' => 'Home',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->updateOrInsert(
                ['name' => $product['name']],
                array_merge($product, [
                    'seller_id' => $sellerId,
                    'created_at' => $now,
                    'updated_at' => $now,
                ])
            );
        }
    }
}
