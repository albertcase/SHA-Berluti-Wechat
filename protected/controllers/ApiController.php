<?php

class ApiController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionIndex()
	{
		$_SESSION['weixin_base_id'] = 1;
	    
	    Yii::app()->end();
	}

	public function actionBallot()
	{
		if(!isset($_SESSION['weixin_base_id'])){
			print json_encode(array('code' => 0, 'msg' => '请先登录'));
	    	Yii::app()->end();
		}
		$tag = false;
	    $week = isset($_POST['week']) ? $_POST['week'] : $tag = true;
	    $id = isset($_POST['id']) ? $_POST['id'] : $tag = true;
	    if ( $tag ) {
	    	print json_encode(array('code' => 2, 'msg' => '请填写必填项'));
	    	Yii::app()->end();
	    }
	    $ballotObj = new Ballot();
	    if ( $ballotObj->check($_SESSION['weixin_base_id'], $id, $week) ) {
	    	print json_encode(array('code' => 3, 'msg' => '已经投过票了'));
	    	Yii::app()->end();
	    }
	    $ballotObj->ballot($_SESSION['weixin_base_id'], $id, $week);
	    print json_encode(array('code' => 1, 'msg' => '投票成功'));
	    Yii::app()->end();
	}

	public function actionGetballot()
	{
		if(!isset($_SESSION['weixin_base_id'])){
			print json_encode(array('code' => 0, 'msg' => '请先登录'));
	    	Yii::app()->end();
		}
		$tag = false;
	    $week = isset($_POST['week']) ? $_POST['week'] : $tag = true;
	    if ( $tag ) {
	    	print json_encode(array('code' => 2, 'msg' => '请填写必填项'));
	    	Yii::app()->end();
	    }
	    $ballotObj = new Ballot();
	    $list = $ballotObj->getballot($week);
	    print json_encode(array('code' => 1, 'msg' => $list));
	    Yii::app()->end();
	}

	public function actionSubmit()
	{
		if(!isset($_SESSION['weixin_base_id'])){
			print json_encode(array('code' => 0, 'msg' => '请先登录'));
	    	Yii::app()->end();
		}
		$tag = false;
	    $name = isset($_POST['name']) ? $_POST['name'] : $tag = true;
	    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : $tag = true;
	    $email = isset($_POST['email']) ? $_POST['email'] : $tag = true;
	    if ( $tag ) {
	    	print json_encode(array('code' => 2, 'msg' => '请填写必填项'));
	    	Yii::app()->end();
	    }
	    $ballotObj = new Ballot();
	    $ballotObj->setInfo($_SESSION['weixin_base_id'], $name, $mobile, $email);
	    print json_encode(array('code' => 1, 'msg' => '提交成功'));
	    Yii::app()->end();
	}

}