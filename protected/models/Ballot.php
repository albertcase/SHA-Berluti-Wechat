<?php

class Ballot{

	private $_db = null;

	public function __construct()
	{
		if( $this->_db===null)
			$this->_db = Yii::app()->db;
		
		
	}

	public function check($uid, $pid, $week)
    {
    	$sql = "SELECT count(`id`) FROM `same_ballot` WHERE uid = :uid and week = :week";
		$command=$this->_db->createCommand($sql);
		$command->bindParam(":uid", $uid, PDO::PARAM_STR);
		//$command->bindParam(":pid", $pid, PDO::PARAM_STR);
		$command->bindParam(":week", $week, PDO::PARAM_STR);
		$rs = $command->select()->queryScalar();
		if ( $rs >= 50 ) {
			return TRUE;
		} 
		return FALSE;
    }
    
    public function ballot($uid, $pid, $week)
    {
    	$sql = "INSERT INTO `same_ballot` SET uid = :uid, pid = :pid, week = :week";
		$command=$this->_db->createCommand($sql);
		$command->bindParam(":uid", $uid, PDO::PARAM_STR);
		$command->bindParam(":pid", $pid, PDO::PARAM_STR);
		$command->bindParam(":week", $week, PDO::PARAM_STR);
		$command->execute();
		return TRUE;
    }

    public function getballot($week)
    {
    	$sql = "SELECT `pid`,count(id) as num FROM same_ballot WHERE week = :week group by pid";
		$command=$this->_db->createCommand($sql);
		$command->bindParam(":week", $week, PDO::PARAM_STR);
		$rs = $command->select()->queryAll();
		$list = array('1' => 0, '2' => 0, '3' => 0);
		$per = array('1' => 0, '2' => 0, '3' => 0);
		for ($i = 0; $i < count($rs); $i++) {
			$list[$rs[$i]['pid']] = $rs[$i]['num'];
		}
		for ($i = 1; $i <= 3; $i++) {
			$per[$i] = round($list[$i]/($list[1] + $list[2] + $list[3]) * 100, 2) . "%";
		}
		return $per;
    }

    public function setInfo($uid, $name, $mobile, $email)
    {
    	$sql = "UPDATE `same_weixin_openid` SET name = :name, mobile = :mobile, email = :email WHERE id = :id";
		$command=$this->_db->createCommand($sql);
		$command->bindParam(":name", $name, PDO::PARAM_STR);
		$command->bindParam(":mobile", $mobile, PDO::PARAM_STR);
		$command->bindParam(":email", $email, PDO::PARAM_STR);
		$command->bindParam(":id", $uid, PDO::PARAM_STR);
		$command->execute();
		return TRUE;
    }

    public function getInfo($uid)
    {
    	$sql = "SELECT * FROM `same_weixin_openid` WHERE id = :id";
		$command=$this->_db->createCommand($sql);
		$command->bindParam(":id", $uid, PDO::PARAM_STR);
		$rs = $command->select()->queryRow();
		if ($rs['name'] != '') {
			return 1;
		}
		return 0;
    }

}