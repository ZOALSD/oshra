<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Blog extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'blogs';
protected $fillable = [
		'id',
		'admin_id',
		      'blog_title_ar',
'blog_title_en',
'blog_ar',
'blog_en',
'blog_img',
'blog_url_video',
'blog_write_ar',
'blog_write_en',
'blog_key',
		'created_at',
		'updated_at',
		'deleted_at',
	];

}
