<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // chỉ ra bảng tương ứng trên csdl
    protected $table = 'theloai';
    use HasFactory;
}
