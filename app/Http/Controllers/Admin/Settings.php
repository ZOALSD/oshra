<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Setting;
use Illuminate\Http\Request;

class Settings extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('admin.settings', ['title' => trans('admin.settings')]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	/*
	    'place',
		'facebook',
		'twitter',
		'instgram',
		'youtube',
		'phone1',
		'phone2',
		 */
		
	public function store(Request $request) {		

		$rules = [
			'sitename_ar'    => 'required',
			'sitename_en'    => 'required',
			'email'          => 'required',
			'place_ar'           => 'sometimes|nullable|',
			'place_en'           => 'sometimes|nullable|',
			'phone1'           => 'sometimes|nullable|',
			'phone2'           => 'sometimes|nullable|',//
			'word_ar'           => 'sometimes|nullable|',//
			'word_en'           => 'sometimes|nullable|',//
			'twitter'           => 'sometimes|nullable|',
			'instgram'           => 'sometimes|nullable|',
			'youtube'           => 'sometimes|nullable|',
			'facebook'           => 'sometimes|nullable|',
			'logo'           => 'sometimes|nullable|'.it()->image(),
			'icon'           => 'sometimes|nullable|'.it()->image(),
			'system_status'  => 'nullable',
			'system_message' => '',
		];
		$data = $this->validate(request(), $rules, [], [
				'sitename_ar'    => trans('admin.sitename_ar'),
				'sitename_en'    => trans('admin.sitename_en'),
				'email'          => trans('admin.email'),
				'place_ar'           => trans('admin.place_ar'),
				'place_en'           => trans('admin.place_en'),
				'phone1'           => trans('admin.phone1'),
				'phone2'           => trans('admin.phone1'),
				'word_ar'           => trans('admin.word_ar'),
				'word_en'           => trans('admin.word_en'),
				'twitter'           => trans('admin.twitter'),
				'instgram'           => trans('admin.instgram'),
				'youtube'           => trans('admin.youtube'),
				'facebook'           => trans('admin.facebook'),
				'logo'           => trans('admin.logo'),
				'icon'           => trans('admin.icon'),
				'system_status'  => trans('admin.system_status'),
				'system_message' => trans('admin.system_message'),
			]);
		if (request()->hasFile('logo')) {
			$data['logo'] = it()->upload('logo', 'setting');
		}
		if (request()->hasFile('icon')) {
			$data['icon'] = it()->upload('icon', 'setting');
		}
		Setting::orderBy('id', 'desc')->update($data);
		session()->flash('success', trans('admin.updated'));
		return redirect(aurl('settings'));

	}

}
