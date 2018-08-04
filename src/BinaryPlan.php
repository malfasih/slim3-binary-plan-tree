<?php

/**
 * Slim 3 Binary Plan - An essentials tools for creating Binary MLM System.
 * 
 * @package Slim
 * @author Anya Gracelya Indraswari <annya@tigatangan.com>
 * @license MIT
 *
 */

namespace Malfasih\Slim;

use Illuminate\Database\Eloquent\Model as DB;

class BinaryPlan {

	/**
	 * Contains downline lists  
	 *
	 * @var array
	 */

	public $users = array();

	/**
	 * Get username by user_key
	 *
	 * @return sql
	 */

	public function getUsername($user_key, $table_name)
	{
		$DB = DB::table($table_name)
				->where('user_key', $user_key)
				->first();

		return $DB;
	}

	/**
	 * Get email by username
	 *
	 * @return sql
	 */

	public function getEmail($username)
	{

	}

	/**
	 * Get upline by username
	 *
	 * @return sql
	 */

	public function getUpline($username)
	{

	}

	/**
	 * Get sponsor by username
	 *
	 * @return sql
	 */

	public function getSponsor($username)
	{

	}

	/**
	 * Get count of left leg users by username
	 *
	 * @return int
	 */

	public function getCountLeftUser($username)
	{

	}

	/**
	 * Get count of right leg users by username
	 *
	 * @return int
	 */

	public function getCountRightUser($username)
	{

	}


}

?>