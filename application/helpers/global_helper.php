<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '
		<li>
		<a href="'.site_url('Home').'"><i class="fa fa-home fa-fw"></i> Home</a>
		</li>
		<li>
		<a href="'.site_url('Karyawan').'"><i class="fa fa-users fa-fw"></i> Karyawan</a>
		</li>
		<li>
		<a href="'.site_url('Shif').'"><i class="fa fa-list fa-fw"></i> Shif Karyawan</a>
		</li>
		<li>
		<a href="'.site_url('Gaji').'"><i class="fa fa-money fa-fw"></i> Gaji Karyawan</a>
		</li>
		<li>
		';
	}
