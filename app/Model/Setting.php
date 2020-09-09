<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {
	protected $table    = 'settings';
	protected $fillable = [
		'sitename_ar',
		'sitename_en',
		'email',
		'logo',
		'icon',
		'place_ar',
		'place_en',
		'facebook',
		'twitter',
		'instgram',
		'youtube',
		'phone1',
		'phone2',
		'word_ar',
		'word_en',
		'system_status',
		'system_message',
	];

	
}
