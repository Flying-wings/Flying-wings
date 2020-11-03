thinkphp5验证码captcha无法显示

996像呼吸一样自然 2019-09-17 12:05:48  1359  收藏
分类专栏： php
版权
thinkphp5 验证码 captcha 不显示的问题解决
问题背景：
本地电脑是正常的，部署到测试环境无法显示验证码
phpinfo查询到gd扩展已安装，fileinfo已安装，还是无法正常显示验证码
使用的是think-captcha

原因：服务器级缓存的问题

解决方案：
1、找到验证码类 \vendor\topthink\think-captcha\src\Captcha.php
2、找到 entry($id = ‘’) 方法
3、在 return 上一行加入 ob_clean();
ps：此函数用来丢弃输出缓冲区中的内容，还有其他地方生成图片，想要正确显示，就需要用到此函数。