<?php

namespace Database\Seeders;

use App\Models\Types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Sport',
            'Összetartás',
            'Szórakozás',
            'Kulturális',
            'Tanulmányi',
            'Egyéb',
        ];

        foreach ($types as $type) {
            Types::create([
                'type' => $type
            ]);
        }
    }
}
