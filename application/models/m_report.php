<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_report extends CI_Model
{
	public function __construct()
	{
		$config['hostname'] = "localhost";
		$config['username'] = "root";
		$config['password'] = "";
		$config['database'] = "dengue";
		$config['dbdriver'] = "mysql";
		$config['dbprefix'] = "";
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = "";
		$config['char_set'] = "utf8";
		$config['dbcollat'] = "utf8_general_ci";
		
		$this->load->database($config);
	}

	public function send_report($report)
	{
		// $sql = "CALL report(
		// 						 '".$report['name']."',
		// 						 '".$report['age']."',
		// 						 '".$report['gender']."',
		// 						 '".$report['severity_id']."',
		// 						 '".$report['date_start']."',
		// 						 '".$report['date_end']."',
		// 						 '".$report['date_admitted']."',
		// 						 '".$report['address']."',
		// 						 '".$report['brgy_id']."',
		// 						 '".$report['sender']."',
		// 						 '".$report['date_sent']."')";

		$sql = "INSERT INTO `dengue`.`patient`
					(
						`name`,
						`age`,
						`gender`,
						`severity_id`,
						`date_start`,
						`date_end`,
						`date_admitted`,
						`address`,
						`brgy_id`,
						`sender`,
						`date_sent`)
					VALUES
					(
						'".$report['name']."',
						'".$report['age']."',
						'".$report['gender']."',
						'".$report['severity_id']."',
						'".$report['date_start']."',
						'".$report['date_end']."',
						'".$report['date_admitted']."',
						'".$report['address']."',
						'".$report['brgy_id']."',
						'".$report['sender']."',
						'".$report['date_sent']."')";


		$this->db->query($sql);
		$this->db->close();
	}

}