<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table='category';

    public static function statusCode($status){

        $data_ = [
            'a' => [
                'name' => 'Aktif',
                'class' => 'badge bg-success'
            ],
            'p' => [
                'name' => 'Pasif',
                'class' => 'badge bg-warning'
            ],
            'ç' => [
                'name' => 'Çöp',
                'class' => 'badge bg-danger'
            ],
        ];

        // 3. hafta 5. partta ayrıntılı tasarım yapıyor hoca
        return '<span class="badge'.$data_[$status]['class'].'">'.$data_[$status]['name'].'</span>';

    }

}
