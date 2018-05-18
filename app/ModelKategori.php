<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class ModelKategori extends Model
{
    protected $table = 'categories';
	protected $fillable = ['name'];
	protected $guarded = ['id'];
}
