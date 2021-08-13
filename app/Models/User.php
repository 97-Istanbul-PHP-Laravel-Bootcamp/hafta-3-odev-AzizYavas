<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $table='users';

    protected $guarded = [];

    protected $filetable = ['uname','pass','mail','mpno','fname','lname','status'];

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
