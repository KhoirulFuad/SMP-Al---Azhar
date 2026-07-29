<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Mengizinkan user untuk mengakses panel Filament.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Untuk sementara, kita izinkan semua user yang terdaftar di tabel users.
        // Jika sudah fix, kamu bisa ganti menjadi: return str_ends_with($this->email, '@gmail.com');
        return true; 
    }
}