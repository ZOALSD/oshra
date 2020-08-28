<?php
\Config::set('filesystems.disks.public.url', url('storage'));
//return dd(config('filesystems.disks.public.url'));
////// direction Function /////////////////////
app()->singleton('direction', function () {
		if (app('l') == 'ar') {
			return '-rtl';
		}
	});
////// direction Function /////////////////////

//////  upload Function /////////////////////
if (!function_exists('it')) {
	function it() {
		return new \App\Http\Controllers\FileUploader;
	}
}
//////  upload Function /////////////////////

////// Admin Url Function /////////////////////
if (!function_exists('aurl')) {
	function aurl($link) {
		if (substr($link, 0, 1) == '/') {
			return url(app('admin').$link);
		} else {
			return url(app('admin').'/'.$link);
		}
	}
}
////// Admin Url Function /////////////////////
////// Get Settings Function /////////////////////
if (!function_exists('setting')) {
	function setting() {
		$setting = \App\Model\Setting::orderBy('id', 'desc')->first();
		if (empty($setting)) {
			return \App\Model\Setting::create(['sitename_ar' => '', 'sitename_en' => '']);
		} else {
			return $setting;
		}
	}
}
////// Get Settings Function /////////////////////

////// Admin Url Function /////////////////////
if (!function_exists('admin')) {
	function admin() {
		return auth()->guard('admin');
	}
}
////// Admin Url Function /////////////////////

////// Admin Url Function /////////////////////
if (!function_exists('active_link')) {
	function active_link($segment, $class = null) {
		if ($segment == null and request()->segment(2) == null) {
			return $class;
		} elseif (in_array(request()->segment(2), explode('|', $segment))) {
			if ($class != null || $class != 'block') {
				if ($segment != null) {
					return $class;
				}
			} else {
				if ($class == 'block') {
					return 'display:block';
				} else {
					return 'display:none';
				}
			}
		}
	}
}
////// Admin Url Function /////////////////////

if (!function_exists('l')) {
	function l($obj) {
		return $obj.'_'.app('l');
	}
}

if (!function_exists('mK')) {
	function mK($num) {
		if ($num > 1000) {
			$x               = round($num);
			$x_number_format = number_format($x);
			$x_array         = explode(',', $x_number_format);
			$x_parts         = array('k', 'm', 'b', 't');
			$x_count_parts   = count($x_array)-1;
			$x_display       = $x;
			$x_display       = $x_array[0].((int) $x_array[1][0] !== 0?'.'.$x_array[1][0]:'');
			$x_display .= $x_parts[$x_count_parts-1];
			return $x_display;
		}
		return $num;
	}
}
