<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Premium Wireless ANC Headphones Model X',
                'price' => 129.00,
                'original_price' => 215.00,
                'discount_percentage' => 40,
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDY0frOEIhqyMqOncOneUewmzzoQfiCe97FLJRihAhQ_ecpPHrKIWJS-SJ3B2Bm9UsYtT2s0vQWjAyk5qal7ZNL9bjDKxokWDw90lu2XiDqA7nw1L_nsn8fi47tPQ__PfzQlCYMC_fABzesFquA0EVhqwYqEln81gs5Sr4ecCTPHegWBAPPVBZq9FtR02jNpAJJhmy0FVLTPuexIf_CMiR4BOWP7F3UZS7nw_IrEOmYq0jUJkSY_5T44D6LQmuT4lOjytPXcmsnyvU',
                'stock' => 15,
                'category' => 'Electronics',
            ],
            [
                'name' => 'Minimalist Smart Watch Series 5',
                'price' => 89.99,
                'original_price' => 119.99,
                'discount_percentage' => 25,
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBUaPRqXfOaHqmSjUaMjTJ0g0J9G1juZNR4yHq_ovAhwK6yDsI64XaxnKXJea0AuJGHLeWjgC_DPSWublR1oDEnSpmMEmgWBcLLNHgRA7zSpesCd_PVjiCr3WWRg7ds5Kb2O75D8lvJzzQmv_kZfXHvWyWgy85jfDoPdEl5QhxwxW-kkjz3-s6n7h4ejYv3RmIIlCeFbRW5UJOOAZnMn1vqnsSDg9YqRK0Gft2hzeGQeuPuvB3q7V-HxUN2O57p_lFUNHa4M05L4o4',
                'stock' => 45,
                'category' => 'Electronics',
            ],
            [
                'name' => 'Retro Instant Camera Mini',
                'price' => 59.00,
                'original_price' => 70.00,
                'discount_percentage' => 15,
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBU4bJgW7CJaij2LuPwJet1XUmhXjy8EPYI7e_acYsaPiKAc_hDPY0gKAVdg6F_6X8SLQTzy_IpnoET06SBPivwt0vTpJPITEsDQTymC_C2MAkMaOCZ_Ob6UqaXgPZl7NiFRHvYl_unrDHP3uhgqe0117fiVTukgchCtupzcgCX7MBVNdK-Ado1AABy46C9aHa3o477ZPLHwcjwdvGQNxO2tILxdaOxh5OMybSI3OZ3YNI0erS6Iy_7qQCgUoMrIhMoOSKuETph4F0',
                'stock' => 12,
                'category' => 'Electronics',
            ],
            [
                'name' => 'Pro Runner Velocity Sneakers',
                'price' => 65.00,
                'original_price' => 130.00,
                'discount_percentage' => 50,
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD_RiUaN7-Zo2CHS6iRS5Y7YnQbkc-996L7gJPSW1sPGmqAsIivRcl2EMHljN2CIRdNN9UX0-gNWkqmvr3Zb43W5teXs7sMm9yPK8Q-Fw2QcPGCg4WQc7u7-AxWLsoJ1uApoBSC6ahhNlvq9oouFJH6UZF98dYwHuNi4G6rSDUxLS-8oHuwXZ_Jiv2xlHgICmjo5DIEVCOkGS3U_GJZfj6X4OcOPXu7axTdKSwzod2gWcN68NLkMjJVZKIAkW10jIO3040D_LJ7UCk',
                'stock' => 88,
                'category' => 'Apparel',
            ],
            // NEW PRODUCTS ADDED BELOW
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
            ]
        ]);
    }
}