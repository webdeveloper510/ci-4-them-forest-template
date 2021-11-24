<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('pages/index');
	}

	public function error_404()
	{
		return view('pages/error-404');
	}

	public function error_500()
	{
		return view('pages/error-500');
	}
	
	public function accordion()
	{
		return view('pages/accordion');
	}

	public function alerts()
	{
		return view('pages/alerts');
	}
	
	public function avatar()
	{
		return view('pages/avatar');
	}
	
	public function background()
	{
		return view('pages/background');
	}

	public function badge()
	{
		return view('pages/badge');
	}
	
	public function blog()
	{
		return view('pages/blog');
	}

	public function border()
	{
		return view('pages/border');
	}
	
	public function breadcrumbs()
	{
		return view('pages/breadcrumbs');
	}

	public function buttons()
	{
		return view('pages/buttons');
	}
	
	public function calendar()
	{
		return view('pages/calendar');
	}

	public function cards()
	{
		return view('pages/cards');
	}
	
	public function carousel()
	{
		return view('pages/carousel');
	}

	public function chart_chartjs()
	{
		return view('pages/chart-chartjs');
	}
	
	public function chart_echart()
	{
		return view('pages/chart-echart');
	}

	public function chart_flot()
	{
		return view('pages/chart-flot');
	}
	
	public function chart_morris()
	{
		return view('pages/chart-morris');
	}

	public function chart_peity()
	{
		return view('pages/chart-peity');
	}
	
	public function chart_sparkline()
	{
		return view('pages/chart-sparkline');
	}

	public function chat()
	{
		return view('pages/chat');
	}
	
	public function collapse()
	{
		return view('pages/collapse');
	}

	public function contacts()
	{
		return view('pages/contacts');
	}
	
	public function counters()
	{
		return view('pages/counters');
	}

	public function draggablecards()
	{
		return view('pages/draggablecards');
	}
	
	public function display()
	{
		return view('pages/display');
	}

	public function dropdown()
	{
		return view('pages/dropdown');
	}
	
	public function editprofile()
	{
		return view('pages/editprofile');
	}

	public function empty()
	{
		return view('pages/empty');
	}
	
	public function extras()
	{
		return view('pages/extras');
	}

	public function faq()
	{
		return view('pages/faq');
	}
	
	public function flex()
	{
		return view('pages/flex');
	}

	public function forgot()
	{
		return view('pages/forgot');
	}
	
	public function form_advanced()
	{
		return view('pages/form-advanced');
	}

	public function form_editor()
	{
		return view('pages/form-editor');
	}
	
	public function form_elements()
	{
		return view('pages/form-elements');
	}

	public function form_layouts()
	{
		return view('pages/form-layouts');
	}
	
	public function form_validation()
	{
		return view('pages/form-validation');
	}

	public function form_wizards()
	{
		return view('pages/form-wizards');
	}
	
	public function gallery()
	{
		return view('pages/gallery');
	}

	public function height()
	{
		return view('pages/height');
	}
	
	public function icons()
	{
		return view('pages/icons');
	}

	public function image_compare()
	{
		return view('pages/image-compare');
	}
	
	public function images()
	{
		return view('pages/images');
	}
	
	public function invoice()
	{
		return view('pages/invoice');
	}

	public function list_group()
	{
		return view('pages/list-group');
	}
	
	public function lockscreen()
	{
		return view('pages/lockscreen');
	}

	public function mail_compose()
	{
		return view('pages/mail-compose');
	}
	
	public function mail_read()
	{
		return view('pages/mail-read');
	}

	public function mail_settings()
	{
		return view('pages/mail-settings');
	}
	
	public function mail()
	{
		return view('pages/mail');
	}

	public function map_leaflet()
	{
		return view('pages/map-leaflet');
	}
	
	public function map_vector()
	{
		return view('pages/map-vector');
	}

	public function margin()
	{
		return view('pages/margin');
	}
	
	public function media_object()
	{
		return view('pages/media-object');
	}

	public function modals()
	{
		return view('pages/modals');
	}
	
	public function navigation()
	{
		return view('pages/navigation');
	}

	public function notification()
	{
		return view('pages/notification');
	}
	
	public function padding()
	{
		return view('pages/padding');
	}

	public function pagination()
	{
		return view('pages/pagination');
	}
	
	public function popover()
	{
		return view('pages/popover');
	}

	public function position()
	{
		return view('pages/position');
	}
	
	public function pricing()
	{
		return view('pages/pricing');
	}

	public function product_cart()
	{
		return view('pages/product-cart');
	}
	
	public function product_details()
	{
		return view('pages/product-details');
	}

	public function products()
	{
		return view('pages/products');
	}
	
	public function profile()
	{
		return view('pages/profile');
	}

	public function progress()
	{
		return view('pages/progress');
	}
	
	public function rangeslider()
	{
		return view('pages/rangeslider');
	}

	public function rating()
	{
		return view('pages/rating');
	}
	
	public function reset()
	{
		return view('pages/reset');
	}

	public function search()
	{
		return view('pages/search');
	}
	
	public function signin()
	{
		return view('pages/signin');
	}

	public function signup()
	{
		return view('pages/signup');
	}
	
	public function spinners()
	{
		return view('pages/spinners');
	}

	public function sweet_alert()
	{
		return view('pages/sweet-alert');
	}
	
	public function table_basic()
	{
		return view('pages/table-basic');
	}

	public function table_data()
	{
		return view('pages/table-data');
	}
	
	public function tabs()
	{
		return view('pages/tabs');
	}

	public function tags()
	{
		return view('pages/tags');
	}
	
	public function thumbnails()
	{
		return view('pages/thumbnails');
	}

	public function timeline()
	{
		return view('pages/timeline');
	}
	
	public function toast()
	{
		return view('pages/toast');
	}

	public function todotask()
	{
		return view('pages/todotask');
	}
	
	public function tooltip()
	{
		return view('pages/tooltip');
	}

	public function treeview()
	{
		return view('pages/treeview');
	}
	
	public function typography()
	{
		return view('pages/typography');
	}

	public function underconstruction()
	{
		return view('pages/underconstruction');
	}
	
	public function userlist()
	{
		return view('pages/userlist');
	}

	public function widget_notification()
	{
		return view('pages/widget-notification');
	}
	
	public function widgets()
	{
		return view('pages/widgets');
	}

	public function width()
	{
		return view('pages/width');
	}

	#------------ Versions ------------
	public function icon_light()
	{
		return view('pages/icon-light');
	}
	
	public function icon_light_boxed()
	{
		return view('pages/icon-light-boxed');
	}
	
	public function icon_dark()
	{
		return view('pages/icon-dark');
	}
	
	public function icon_dark_boxed()
	{
		return view('pages/icon-dark-boxed');
	}

	public function icontext_light()
	{
		return view('pages/icontext-light');
	}
	
	public function icontext_light_boxed()
	{
		return view('pages/icontext-light-boxed');
	}
	
	public function icontext_dark()
	{
		return view('pages/icontext-dark');
	}
	
	public function icontext_dark_boxed()
	{
		return view('pages/icontext-dark-boxed');
	}

	public function iconoverlay_light()
	{
		return view('pages/iconoverlay-light');
	}
	
	public function iconoverlay_light_boxed()
	{
		return view('pages/iconoverlay-light-boxed');
	}
	
	public function iconoverlay_dark()
	{
		return view('pages/iconoverlay-dark');
	}
	
	public function iconoverlay_dark_boxed()
	{
		return view('pages/iconoverlay-dark-boxed');
	}

	public function closed_light()
	{
		return view('pages/closed-light');
	}
	
	public function closed_light_boxed()
	{
		return view('pages/closed-light-boxed');
	}
	
	public function closed_dark()
	{
		return view('pages/closed-dark');
	}
	
	public function closed_dark_boxed()
	{
		return view('pages/closed-dark-boxed');
	}

	public function toggle_light()
	{
		return view('pages/toggle-light');
	}
	
	public function toggle_light_boxed()
	{
		return view('pages/toggle-light-boxed');
	}
	
	public function toggle_dark()
	{
		return view('pages/toggle-dark');
	}
	
	public function toggle_dark_boxed()
	{
		return view('pages/toggle-dark-boxed');
	}

	public function hoversubmenu_light()
	{
		return view('pages/hoversubmenu-light');
	}
	
	public function hoversubmenu_light_boxed()
	{
		return view('pages/hoversubmenu-light-boxed');
	}
	
	public function hoversubmenu_dark()
	{
		return view('pages/hoversubmenu-dark');
	}
	
	public function hoversubmenu_dark_boxed()
	{
		return view('pages/hoversubmenu-dark-boxed');
	}

	public function hoversubmenu_style_light()
	{
		return view('pages/hoversubmenu-style-light');
	}
	
	public function hoversubmenu_style_light_boxed()
	{
		return view('pages/hoversubmenu-style-light-boxed');
	}
	
	public function hoversubmenu_style_dark()
	{
		return view('pages/hoversubmenu-style-dark');
	}
	
	public function hoversubmenu_style_dark_boxed()
	{
		return view('pages/hoversubmenu-style-dark-boxed');
	}

	public function horizontal_light()
	{
		return view('pages/horizontal-light');
	}
	
	public function horizontal_light_boxed()
	{
		return view('pages/horizontal-light-boxed');
	}
	
	public function horizontal_dark()
	{
		return view('pages/horizontal-dark');
	}
	
	public function horizontal_dark_boxed()
	{
		return view('pages/horizontal-dark-boxed');
	}

	public function centerlogo_light()
	{
		return view('pages/centerlogo-light');
	}
	
	public function centerlogo_light_boxed()
	{
		return view('pages/centerlogo-light-boxed');
	}
	
	public function centerlogo_dark()
	{
		return view('pages/centerlogo-dark');
	}
	
	public function centerlogo_dark_boxed()
	{
		return view('pages/centerlogo-dark-boxed');
	}
	
}
