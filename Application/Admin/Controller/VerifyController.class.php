<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 验证后台登录信息
 * 作者：@671
 * 时间：2018年4月4日14:12:10
 */

class VerifyController extends Controller {
    public function __construct() {
        parent::__construct();

        // $this->isExist();
    }

    /**
     * session存在
     * 如果不存在退出
     * @return bool true 表示存在
     */
    public function isExist() {
        // 判断session是否存在
        if (!$admin = session('?admin')) {
            // 判断session的账号是不是正确的
            $map['username'] = base64_decode($admin['username']);
            $map['password'] = base64_decode($admin['password']);

            $ad = M('Admin');
            $count = $ad->where($map)->count();
            if ($count != 0) {
                // 表示对的
                return true;
            }
        }

        $this->error("操作超时，请重新登录！", HOST_PATH.'/Admin/login', 3);
    }
}
