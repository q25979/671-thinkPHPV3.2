<?php
/**
 * 作者：671
 * 时间：2018年1月24日19:21:33
 * 功能：公共类
 */

class Common {
    /**
     * md5验证
     *
     * @param  string $md5 需要验证md5
     * @param  string $data 需要加的字符
     * @return bool
     */
    function verifyMd5($md5, $data) {

        if ($md5 == md5(VERIFY_STR . $data)) {
            return ture;

        } else {
            return false;
        }
    }

    /**
     * 创建订单号获取id
     *
     * @return string 唯一的id值
     */
    function createOrder() {
        $yCode = array('a', 'B', 'c', 'd', 'E', 'k', 'G', 'H', 'M', 'J');
        $orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));

        return $orderSn;
    }

    /**
     * 生成验证码
     */
    function createCode() {
        $verify = new \Think\Verify();

        $verify->fontSize = 30;     // 字体大小
        $verify->length = 4;        // 验证码长度
        $verify->useNoise = false;  // 清除杂点

        $verify->entry();   // 生成验证码
    }

    /**
     * 生成随机数
     *
     * @param int $length 长度默认16
     * @return string 随机串
     */
    function nonceStr($length=16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";

        for ($i=0; $i<$length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }

        return $str;
    }

    /**
     * 获取当前页面的url
     *
     * @return string url
     */
    function getUrl() {
        // 当前网页
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        return $url;
    }

    /**
     * 获取客户端ip地址
     *
     * @return string ip地址
     */
    public function getIP() {
        $ip = $_SERVER["REMOTE_ADDR"];

        return $ip;
    }
}