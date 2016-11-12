<?php
/**
 * 模块测试1模块微站定义
 *
 * @author zqm
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Model_testModuleSite extends WeModuleSite {
	
	public function doWebVisit() {
		//这个操作被定义用来呈现 功能封面
		global $_W,$_GPC;
		
		$apply = pdo_fetchall("SELECT * FROM".tablename('model_test_apply')." WHERE  `uniacid`=:uniacid"." order by id desc ",array(':uniacid'=>$_W['uniacid']));
		load()->func("tpl");
		include $this->template('visit');
	}
	public function doWebEnter() {
		//这个操作被定义用来呈现 功能封面
		global $_W,$_GPC;
		load()->func("tpl");
		include $this->template('enter');
	}
	public function doMobileFace1() {
		//这个操作被定义用来呈现 功能封面
	}
	public function doWebList1() {
		//这个操作被定义用来呈现 规则列表
	}
	public function doWebNav1() {
		//这个操作被定义用来呈现 管理中心导航菜单
	}
	public function doMobile11111() {
		//这个操作被定义用来呈现 微站首页导航图标
	}
	public function doMobileUser1() {
		//这个操作被定义用来呈现 微站个人中心导航
	}
	public function doMobileShortcut1() {
		//这个操作被定义用来呈现 微站快捷功能导航
	}

}