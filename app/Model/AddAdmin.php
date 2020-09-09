<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class AddAdmin extends Model {

	//use SoftDeletes;
//	protected $dates = ['deleted_at'];
	protected $table    = 'admins';

protected $fillable = [
		'id',
		      'name',
'email',
'password',
		'created_at',
		'updated_at',
	];

}
