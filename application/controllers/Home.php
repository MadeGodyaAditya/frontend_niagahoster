<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{

		//Logo Niagahoster
		$data['logo_src'] = base_url('assets/png/niagahoster.png');

		//Img
		$data['banner_php_hosting'] = base_url('assets/svg/illustration banner PHP hosting-01.svg');
		$data['zen_guard'] = base_url('assets/svg/zenguard01.svg');
		$data['composser'] = base_url('assets/svg/icon-composer.svg');
		$data['ion_cube'] = base_url('assets/svg/ioncube.svg');
		$data['php_all'] = base_url('assets/svg/icon PHP Hosting_PHP Semua Versi.svg');
		$data['hosting_my_sql'] = base_url('assets/svg/Hosting_My_SQL.svg');
		$data['cpanel'] = base_url('assets/svg/icon PHP Hosting_CPanel.svg');
		$data['uptime'] = base_url('assets/svg/icon PHP Hosting_garansi uptime.svg');
		$data['innodb'] = base_url('assets/svg/icon PHP Hosting_InnoDB.svg');
		$data['sqlremote'] = base_url('assets/svg/icon PHP Hosting_My SQL remote.svg');
		$data['hosting_laravel'] = base_url('assets/svg/illustration banner support laravel hosting.svg');
		$data['foto_pegawai'] = base_url('assets/images/Image support.png');


		//Load json and decode into array
		$json_price = file_get_contents(base_url('assets/data/price.json'));
		$data['price'] = json_decode($json_price);

		//Explode the thousands separator
		$data['current_a'] = []; //front (e.g: 49)
		$data['current_b'] = []; //back (e.g: 500)
		$max_user = 0;
		$a = 0;

		foreach ($data['price'] as $ar_dp) {
			$split = explode(";", number_format($ar_dp->current, 0, "", ";"));
			array_push($data['current_a'], $split[0]);
			array_push($data['current_b'], $split[1]);

			//determine best seller
			if (($ar_dp->user) > $max_user) {
				$max_user = ($ar_dp->user);
				$data['best_seller'] = $a;
			}
			$a = $a + 1;
		}
		//$split = explode(";", number_format($data['price'][0]->current, 0, "", ";"));
		//var_dump($data['price'][1]->feature[1]);
		//die;

		//Column for pricing
		$data['col_prc'] = count($data['price']) - 1;

		$this->load->view('home/header');
		$this->load->view('home/home', $data);
		$this->load->view('home/footer');
	}
}
