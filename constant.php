<?php
/**
 * 定义常量
 * User: @671
 * Date: 2018/4/8
 * Time: 17:43
 */

define('VERIFY_STR', '0OwBCGQf9a0MZqujiqVSS6DPfdbLeBCq');   // 验证字符串
define('LIMIT', 5);     									// 分页

// 删除
define('IS_NOT_DELETED', 0);    	// 设置删除条件：未删除
define('IS_DELETED', 1); 	        // 设置删除条件：已删除

// 订单状态
define('ORDER_STATUS_NOT_MONEY', 0);    // 设置订单状态：代付款
define('ORDER_STATUS_YES_MONEY', 1);    // 设置订单状态：已付款
define('ORDER_STATUS_DELIVER', 2);      // 设置订单状态：已发货
define('ORDER_STATUS_RECEIVE', 3);      // 设置订单状态：已收货
define('ORDER_STATUS_OUT_GOODS', -1);   // 设置订单状态：已退货

// 后台状态
define('ADMIN_STATUS_ENABLE', 0);       // 设置后台状态：启用
define('ADMIN_STATUS_DISABLE', -1);     // 设置后台状态：封号

// 反馈状态
define('FEEDBACK_STATUS_UNREAD', 0);    // 设置反馈状态：未读
define('FEEDBACK_STATUS_READ', 1);      // 设置反馈状态：已读

// 商品
define('SHOP_IS_HOT_NOT', 0);           // 热售推荐：正常
define('SHOP_IS_HOT_YES', 1);           // 热售推荐：热售
define('SHOP_STATUS_PUTAWAY', 0);       // 设置商品状态：上架
define('SHOP_STATUS_SOLD_OUT', 1);      // 设置商品状态：下架

// 用户状态
define('USER_STATUS_ENABLE', 0);        // 设置用户状态：正常
define('USER_STATUS_DISABLE', -1);      // 设置用户状态：封号

// 退款方式
define('RETURN_GOODS_TYPE_WECHAT', 0);  // 退款方式：微信
define('RETURN_GOODS_TYPE_BANK', 1);    // 退款方式：银行卡

// 退款状态
define('RETURN_GOODS_STATUS_ERROR', -1);    // 退款状态：失败
define('RETURN_GOODS_STATUS_SUCCESS', 0);   // 退款状态：成功
define('RETURN_GOODS_STATUS_ING', 1);       // 退款状态：退款中
define('RETURN_GOODS_STATUS_REJECT', 2);    // 退款状态：拒绝



