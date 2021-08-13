<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table='product';

    protected $guarded = [];

    protected $filetable = ['category_id','user_id','unicode','slug','title','description','order','status','prc','cid'];

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
