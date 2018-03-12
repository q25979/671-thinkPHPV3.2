/**
 * 作者：@671
 * 时间：2018年1月30日17:35:22
 * 功能：公共js文件
 */

// 随机字符串 默认16
function nonceStr (length) {
    length = length || 16;

    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var randomstring = '';

    for (var i = 0; i < length; i++) {
        randomstring += possible.charAt( Math.floor(Math.random() * possible.length));
    }
    return randomstring;
}
