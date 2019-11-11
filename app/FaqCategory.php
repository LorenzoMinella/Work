<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model {

    protected $table = 'faqs_categories';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

	protected $fillable = [
		'*',
	];

}