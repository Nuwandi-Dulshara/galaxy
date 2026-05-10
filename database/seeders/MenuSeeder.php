<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Grilled Salmon',
                'description' => 'Fresh grilled salmon with lemon butter sauce and seasonal vegetables.',
                'price' => 28.99,
                'category' => 'Main Course',
                'image' => 'build/assets/img/dinner.webp',
                'is_available' => true,
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Crisp romaine lettuce with parmesan, croutons, and traditional Caesar dressing.',
                'price' => 12.99,
                'category' => 'Salad',
                'image' => 'build/assets/img/dinner.webp',
                'is_available' => true,
            ],
            [
                'name' => 'Ribeye Steak',
                'description' => 'Premium 12oz ribeye steak, perfectly seasoned and grilled to perfection.',
                'price' => 34.99,
                'category' => 'Main Course',
                'image' => 'build/assets/img/dinner.webp',
                'is_available' => true,
            ],
            [
                'name' => 'Chicken Parmesan',
                'description' => 'Breaded chicken breast topped with marinara sauce and melted mozzarella.',
                'price' => 22.99,
                'category' => 'Main Course',
                'image' => 'build/assets/img/dinner.webp',
                'is_available' => true,
            ],
            [
                'name' => 'Chocolate Cake',
                'description' => 'Rich layers of chocolate cake with dark chocolate ganache and fresh berries.',
                'price' => 9.99,
                'category' => 'Dessert',
                'image' => 'build/assets/img/dinner.webp',
                'is_available' => true,
            ],
            [
                'name' => 'French Onion Soup',
                'description' => 'Caramelized onion soup topped with crusty bread and melted gruyere cheese.',
                'price' => 8.99,
                'category' => 'Soup',
                'image' => 'build/assets/img/dinner.webp',
                'is_available' => true,
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
