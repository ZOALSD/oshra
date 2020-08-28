<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class About extends Model {

	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'abouts';
protected $fillable = [
		'id',
		'admin_id',
		'about_ar',
		'about_en',
		'keyword',
		'volunteer_ar',
		'volunteer_en',
		'tabara_ar',
		'tabara_en',
		'created_at',
		'updated_at',
		'deleted_at',
	];

}
