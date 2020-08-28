<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Manger extends Model {

protected $table    = 'admins';
protected $fillable = [
		'id',
		'email',
		'name',
		'password',
		'created_at',
		'updated_at',
	];
	protected $hidden = ['password'];


}
