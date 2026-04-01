<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    // kalo nama Modelnya Player, maka otomatis nama tabel di databasenya auto set jadi players, makanya kalo ngasih nama Model itu pake bahasa Inggris, jadi ga perlu pake protected $table = 'player';
    // tapi ada cara yang lebih baik lagi, yaitu kita bisa membuat Model sekaligus Migrationnya, dengan cara php artisan make:model Player -m

    // mengatur field mana saja yang boleh diisi secara massal (mass assignment) pada model, Laravel hanya akan mengizinkan field yang ada di $fillable untuk disimpan ke database, Tanpa $fillable, user bisa saja kirim data tambahan yang tidak seharusnya diubah
    protected $fillable = ['name', 'date_of_birth', 'position', 'market_value'];
}
