<?php 
	global $_W,$_GPC;
	//获取活动数据
	 load()->func('tpl');
	if(checksubmit()){	
		$data['uniacid'] = $_W['uniacid'];
		$data['name'] = $_GPC['name'];
		$data['phone'] = $_GPC['phone'];
		$data['company'] = $_GPC['company'];
		$data['visit_num'] = $_GPC['visit_num'];
		$data['comment'] = $_GPC['comment'];
		//$data['status'] = $_W['status'];
		//$data['time'] = $_W['time'];
		
		$res = pdo_insert('model_test_apply',$data);
		
		
	};
	//加载视图
	include $this->template('visit_m');
 ?>