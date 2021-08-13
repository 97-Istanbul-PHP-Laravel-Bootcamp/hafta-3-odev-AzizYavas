<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table='category';

    protected $guarded = [];

    protected $filetable = ['title','description','slug','status'];

    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';


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
