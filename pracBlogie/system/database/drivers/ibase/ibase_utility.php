<?php
/**
 
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 3.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Interbase/Firebird Utility Class
 *
 * @category	Database
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/database/
 */
class CI_DB_ibase_utility extends CI_DB_utility {

	/**
	 * Export
	 *
	 * @param	string	$filename
	 * @return	mixed
	 */
	protected function _backup($filename)
	{
		if ($service = ibase_service_attach($this->db->hostname, $this->db->username, $this->db->password))
		{
			$res = ibase_backup($service, $this->db->database, $filename.'.fbk');

			// Close the service connection
			ibase_service_detach($service);
			return $res;
		}

		return FALSE;
	}

}
