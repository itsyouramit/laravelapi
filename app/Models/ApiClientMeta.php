<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiClientMeta extends Model
{
    use HasFactory;

    protected $table = 'api_client_metas';
    protected $fillable = ['oauth_client_id','organization','contact_email','description','status','approved_at','allowed_scopes'];

    public function allowed_scopes(){
        return [
            'read-student-list' => 'Read list of students',
            'write-student' => 'Write student data',
            'read-health-record' => 'Read health record data',
        ];
    }
}
