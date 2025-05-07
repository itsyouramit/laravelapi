<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiClientMeta extends Model
{
    use HasFactory;

    protected $table = 'api_client_metas';
    protected $fillable = ['oauth_client_id','organization','contact_email','description','status','approved_at'];

}
