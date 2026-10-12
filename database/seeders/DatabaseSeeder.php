<?php

namespace Database\Seeders;

use App\Models\client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // تشفير جميع كلمات المرور اللي نصية
        $users = User::all();

        foreach ($users as $user) {
            // التأكد أن كلمة المرور ليست مشفرة بالفعل
            if (!str_starts_with($user->password, '$2y$')) {
                $user->password = Hash::make($user->password);
                $user->save();
            }
        }
    }
}
