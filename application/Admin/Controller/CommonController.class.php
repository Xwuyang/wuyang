<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Util\Rbac;

class CommonController extends Controller {
    public function _initialize() {
        // 用户权限检查
        if (C('USER_AUTH_ON') && !in_array(MODULE_NAME, explode(',', C('NOT_AUTH_MODULE')))) {
            if (!RBAC::AccessDecision()) {
                //检查认证识别号
                if (!session(C('USER_AUTH_KEY'))) {
                    //跳转到认证网关
                    redirect(PHP_FILE . C('USER_AUTH_GATEWAY'));
                }
                $this->error('没有权限');
            }
        }
    }

}