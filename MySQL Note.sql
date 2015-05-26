 
11:53 2015-05-03
    ->mysql -u root -p 
    ->passwords:****
mysql>show databases;
mysql>create database test;
mysql>use test;
mysql>show tables;
mysql>drop table table_name;
mysql>drop database test;
mysql>\c        直接退出执行
mysql>set name gbk          告诉服务器字符集是gbk
     > alter table msg  add age2 tinyint  unsigned;   ##添加列 无符号整型
     > alter table msg drop age2;     ##删除列

     >alter table table_name add primary key(id);
-----------------------------------------
---------创建 表
mysql> create table class(
    -> stu int,
    -> name varchar(20),
    -> age int,
    -> area varchar(20)
    -> );
----------查看 表
mysql> desc class;
######## 增
MySQL>insert into msg
     >(id , title , name  , content)
     >values
     >(1,'初来乍到','张三','刚来能不能？？');

mysql>insert into msg
     >(id,title,name,content)
     >values
     >(2,'初出茅庐','李四','初生牛犊不怕虎');
######## 改
mysql>update msg
     >set
     >id = 2,
     >content='偏要当老大'
     >where
     >name='李四 ';



########  删
mysql>delete from table_name where id=2;

########  查
mysql>select * from table_name where id>2;

--------------------------------
#########建表就是声明列的过程 
unsigned  无符号类型
zerofill  用“零”填充 默认为 unsigned
alter table msg add age3 tinyint(5) zerofill; 
列声明默认值  用default 
时间用int型储存时间戳   PHP 中time()函数
echo time(); 
echo date('y-m-d H:i',time());


 