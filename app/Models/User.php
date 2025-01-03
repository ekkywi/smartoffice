<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    protected $fillable = [
        'name',
        'divisi_id',
        'jabatan_id',
        'username',
        'password',
        'status_aktivasi',
        'reset_password_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'reset_password_token',
    ];

    protected $attributes = [
        'status_aktivasi' => 0,
    ];
}
