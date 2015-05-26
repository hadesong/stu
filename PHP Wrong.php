<? php
PHP开发学习 笔记
 

18:13 2015-04-24
问题：PHP Warning:  PHP Startup: Unable to load dynamic library   提示找不到php_exif.dll
方案：你打开php.ini配置文件把extension=php_mbstring.dll拷贝到extension=php_exif.dll之前，保存，重启一下服务器
参考：http://wujiang8337.blog.163.com/blog/static/585544520092184543282/

11:27 2015-05-03
mysql 密码为空

15:11 2015-05-07
问题：Fatal error: Unknown: Failed opening required 
方案：Apache服务器不识别中文路径
参考：http://www.diannaojishu.com/article-98-2564-1.html

11:44 2015-05-08
问题：MySQL设置id不能递增
方案：设置主键、勾选A_I

问题：MySQL插入中文乱码
方案：mysql_query("set names 'utf8'");////数据库中字段排序规则 utf8_bin !!

问题：now（）函数显示0 
方案：定义变量获取时间戳$v_time=time();再插入int型时间戳，输出时格式化

问题：time（）函数显示时间不准确
方案：默认为格林尼治时间，设置为北京时间即可date_default_timezone_set('PRC');

2015年5月13日11:31:26
笔记：若是纯PHP脚本，不需要在结尾加?>结尾，防止错误...
















?>