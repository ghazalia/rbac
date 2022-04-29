<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table = 'role_has_permissions';

    protected $primaryKey = ['permission_id', 'role_id'];

    public $incrementing = false;


    protected $guarded = ['permission_id', 'role_id'];

}
