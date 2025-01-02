<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi'; // Set nama tabel yang menggunakan model
    protected $primaryKey = 'divisi_id'; // Set primary key
    protected $keyType = 'string'; // Set tipe data primary key
    public $incrementing = false; // Set auto increment primary key menjadi false

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid(); // Generate UUID jika primary key kosong
            }
        });
    }

    // Set field yang boleh diisi
    protected $fillable = [
        'nama_divisi',
        'kode_divisi',
    ];
}
