<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@nsadiu.com',
            'password' => Hash::make('admin123'),
            'student_id' => 'ADMIN001',
            'batch' => 'N/A',
            'department' => 'Administration',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Create sample transport schedule
        DB::table('transport_schedules')->insert([
            'departure_time' => '06:20:00',
            'route_from' => 'Chashara, Narayanganj',
            'route_to' => 'DIU Campus',
            'bus_number' => 'NSA-001',
            'capacity' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Create sample notice
        DB::table('notices')->insert([
            'title' => 'Welcome to NSA DIU',
            'content' => 'Welcome to Narayanganj Student Association - Daffodil International University',
            'publish_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
