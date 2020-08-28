<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Member extends Model {

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table    = 'members';
    protected $fillable = [
        'id',
        'admin_id',
        'member_name_ar',
        'member_name_en',
        'member_about_ar',
        'member_about_en',
        'member_face',
        'member_twitter',
        'member_instgram',
        'member_image',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
