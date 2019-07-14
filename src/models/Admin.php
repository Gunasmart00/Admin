<?php

namespace Gunaseelan\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	public $table="admin";
    public $fillable=["name","permission_level"];
}
