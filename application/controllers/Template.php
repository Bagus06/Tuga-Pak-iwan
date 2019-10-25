<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends CI_Controller
{

	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/dashboard-1');
		$this->load->view('partials/footer');
	}
	public function dashboard_1()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/dashboard-1');
		$this->load->view('partials/footer');
	}
	public function dashboard_2()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/dashboard-1');
		$this->load->view('partials/footer');
	}
	public function dashboard_3()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/dashboard-1');
		$this->load->view('partials/footer');
	}
	public function widgets()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/widgets');
		$this->load->view('partials/footer');
	}
	public function cards()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/cards');
		$this->load->view('partials/footer');
	}
	public function grid()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/grid');
		$this->load->view('partials/footer');
	}
	public function badges()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/badges');
		$this->load->view('partials/footer');
	}
	public function typography()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/typography');
		$this->load->view('partials/footer');
	}
	public function buttons()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/buttons');
		$this->load->view('partials/footer');
	}
	public function button_group()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/button-group');
		$this->load->view('partials/footer');
	}
	public function buttons_dropdown()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/buttons-dropdown');
		$this->load->view('partials/footer');
	}
	public function dropdown()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/dropdown');
		$this->load->view('partials/footer');
	}
	public function footer()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/footer');
		$this->load->view('partials/footer');
	}
	public function panels()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/panels');
		$this->load->view('partials/footer');
	}
	public function tab()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/tab');
		$this->load->view('partials/footer');
	}
	public function toltip_popover()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/toltip-popover');
		$this->load->view('partials/footer');
	}
	public function helper_css_classes()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/helper-css-classes');
		$this->load->view('partials/footer');
	}
	public function code_editors()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/code-editors');
		$this->load->view('partials/footer');
	}
	public function layout_1()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/layout-1');
		$this->load->view('partials/footer');
	}
	public function layout_options()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/layout-options');
		$this->load->view('partials/footer');
	}
	public function list_groups()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/list-groups');
		$this->load->view('partials/footer');
	}
	public function modals()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/modals');
		$this->load->view('partials/footer');
	}
	public function navs()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/navs');
		$this->load->view('partials/footer');
	}
	public function progressbar()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/progressbar');
		$this->load->view('partials/footer');
	}
	public function breadcrumb()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/breadcrumb');
		$this->load->view('partials/footer');
	}
	public function dragable_panels()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/dragable-panels');
		$this->load->view('partials/footer');
	}
	public function resizeable_panels()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/resizeable-panels');
		$this->load->view('partials/footer');
	}
	public function blank()
	{
		$this->load->view('partials/header');
		$this->load->view('template/blank');
		$this->load->view('partials/footer');
	}
	public function inbox()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/inbox');
		$this->load->view('partials/footer');
	}
	public function email_view()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/email-view');
		$this->load->view('partials/footer');
	}
	public function compose_email()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/compose-email');
		$this->load->view('partials/footer');
	}
	public function flot_js()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/flot-js');
		$this->load->view('partials/footer');
	}
	public function chart_js()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/chart-js');
		$this->load->view('partials/footer');
	}
	public function line_chart()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/line-chart');
		$this->load->view('partials/footer');
	}
	public function chartist()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/chartist');
		$this->load->view('partials/footer');
	}
	public function c3_charts()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/c3-charts');
		$this->load->view('partials/footer');
	}
	public function grap_rickshaw()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/grap-rickshaw');
		$this->load->view('partials/footer');
	}
	public function charts_sparkline()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/charts-sparkline');
		$this->load->view('partials/footer');
	}
	public function graph_morris()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/graph-morris');
		$this->load->view('partials/footer');
	}
	public function contacts()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/contacts');
		$this->load->view('partials/footer');
	}
	public function file_manager()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/file-manager');
		$this->load->view('partials/footer');
	}
	public function calendar_full()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/calendar-full');
		$this->load->view('partials/footer');
	}
	public function gallery()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/gallery');
		$this->load->view('partials/footer');
	}
	public function video()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/video');
		$this->load->view('partials/footer');
	}
	public function vote_list()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/vote-list');
		$this->load->view('partials/footer');
	}
	public function issue_tracker()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/issue-tracker');
		$this->load->view('partials/footer');
	}
	public function blog()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/blog');
		$this->load->view('partials/footer');
	}
	public function articles()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/articles');
		$this->load->view('partials/footer');
	}
	public function timeline()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/timeline');
		$this->load->view('partials/footer');
	}
	public function accordion()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/accordion');
		$this->load->view('partials/footer');
	}
	public function pin_board()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/pin-board');
		$this->load->view('partials/footer');
	}
	public function carousel()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/carousel');
		$this->load->view('partials/footer');
	}
	public function idle_timer()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/idle-timer');
		$this->load->view('partials/footer');
	}
	public function users()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/users');
		$this->load->view('partials/footer');
	}
	public function basic_form()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/basic-form');
		$this->load->view('partials/footer');
	}
	public function wizard()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/wizard');
		$this->load->view('partials/footer');
	}
	public function file_upload()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/file-upload');
		$this->load->view('partials/footer');
	}
	public function selects_and_tags()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/selects-and-tags');
		$this->load->view('partials/footer');
	}
	public function locked_screen()

	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/locked-screen');
		$this->load->view('partials/footer');
	}
	public function controls()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/controls');
		$this->load->view('partials/footer');
	}
	public function login()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/login');
		$this->load->view('partials/footer');
	}
	public function forget_password()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/forget-password');
		$this->load->view('partials/footer');
	}
	public function register()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/register');
		$this->load->view('partials/footer');
	}
	public function profile()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/profile');
		$this->load->view('partials/footer');
	}
	public function portfolio()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/portfolio');
		$this->load->view('partials/footer');
	}
	public function password_meter()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/password-meter');
		$this->load->view('partials/footer');
	}
	public function loaders()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/loaders');
		$this->load->view('partials/footer');
	}
	public function tour()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/tour');
		$this->load->view('partials/footer');
	}
	public function education_course_1()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/education-course-1');
		$this->load->view('partials/footer');
	}
	public function notification()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/notification');
		$this->load->view('partials/footer');
	}
	public function notification_2()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/notification-2');
		$this->load->view('partials/footer');
	}
	public function nestable_list()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/nestable-list');
		$this->load->view('partials/footer');
	}
	public function agile_board()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/agile-board');
		$this->load->view('partials/footer');
	}
	public function sweet_alert()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/sweet-alert');
		$this->load->view('partials/footer');
	}
	public function truncate()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/truncate');
		$this->load->view('partials/footer');
	}
	public function social_buttons()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/social-buttons');
		$this->load->view('partials/footer');
	}
	public function loading_buttons()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/loading-buttons');
		$this->load->view('partials/footer');
	}
	public function masonry()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/masonry');
		$this->load->view('partials/footer');
	}
	public function search_result()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/search-result');
		$this->load->view('partials/footer');
	}
	public function invoice()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/invoice');
		$this->load->view('partials/footer');
	}
	public function e404()
	{
		$this->load->view('partials/header');
		$this->load->view('template/404');
		$this->load->view('partials/footer');
	}
	public function e500()
	{
		$this->load->view('partials/header');
		$this->load->view('template/500');
		$this->load->view('partials/footer');
	}
	public function empty_page()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/empty-page');
		$this->load->view('partials/footer');
	}
	public function coming_soon()
	{
		$this->load->view('partials/header');
		$this->load->view('template/coming-soon');
		$this->load->view('partials/footer');
	}
	public function coming_soon_2()
	{
		$this->load->view('partials/header');
		$this->load->view('template/coming-soon-2');
		$this->load->view('partials/footer');
	}
	public function teams()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/teams');
		$this->load->view('partials/footer');
	}
	public function teams_board()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/teams-board');
		$this->load->view('partials/footer');
	}
	public function basic_tables()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/basic-tables');
		$this->load->view('partials/footer');
	}
	public function data_tables()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/data-tables');
		$this->load->view('partials/footer');
	}
	public function st()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/static-tables(');
		$this->load->view('partials/footer');
	}

	public function product_list()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/product-list');
		$this->load->view('partials/footer');
	}

	public function product_item()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/product-item');
		$this->load->view('partials/footer');
	}
	public function order_list()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/order-list');
		$this->load->view('partials/footer');
	}
	public function shop()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/shop');
		$this->load->view('partials/footer');
	}
	public function cart()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/cart');
		$this->load->view('partials/footer');
	}
	public function checkout()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/checkout');
		$this->load->view('partials/footer');
	}
	public function font_awsome()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/font-awsome');
		$this->load->view('partials/footer');
	}
	public function elegant_icon()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/elegant-icon');
		$this->load->view('partials/footer');
	}
	public function et_line_icon()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/et-line-icon');
		$this->load->view('partials/footer');
	}
	public function google_maps()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('template/google-maps');
		$this->load->view('partials/footer');
	}
}
