<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{

    protected $fillable = ['user_id','tanggal_lembur','jam','alasan','fee'];

    protected $appends = ['name', 'jabatan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getNameAttribute()
    {
        return $this->user->name;
    }

    public function getJabatanAttribute()
    {
        return $this->user->jabatan;
    }
}
