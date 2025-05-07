<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'oauth_clients';
    protected $fillable = ['user_id ','name','secret','provider','redirect','personal_access_client','password_client','revoked'];
}
