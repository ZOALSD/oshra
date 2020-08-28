<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Causes extends Model {

	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'causes';
protected $fillable = [
		'id',
		'admin_id',
'causes_name_ar',
'causes_name_en',
'causes_dis_ar',
'causes_dis_en',
'causes_date',
'causes_img',
'causes_youtube_link',
'causes_facebook_link',
'causes_twitter_link',
'causes_instgram_link',
'causes_plase',
'status',
'key_word',
		'created_at',
		'updated_at',
		'deleted_at',
	];

   public function causes_catgo_id(){
      return $this->hasOne(\App\Model\Causestype::class,'id','causes_catgo_id');
   }

}
