<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    protected $table='nhanvien';
    protected $filltable=
    [
        'id',
        'hoten_nv',
        'diachi_nv',
        'gioitinh_nv',
        'sdt_nv',
    ];
    public function phongban()
       {
        return $this->hasOne('App\Models\Chucvu','ma_cv','id');
       }
    use HasFactory;
}
