# my-laravel-admin
基于zsong/laravel-admin的后台，初始化一些配置，修改了一些不足之处

## 系统使用
- 根目录输入命令：docker-compose up -d
- 进入容器执行：composer install
- 配置env文件中的数据库和APP_URL
- 执行：php artisan migrate && php artisan db:seed

## 官方文档：
[https://laravel-admin.org/docs/zh/](https://laravel-admin.org/docs/zh/)


## 一些总结
[http://www.gaoqinghd.com/laravel-admin框架使用](http://www.gaoqinghd.com/laravel-admin框架使用)

##添加一个crud
- 写migration创建数据表
- 创建model文件
- 创建控制器：php artisan admin:make xxxController --model=App\\Models\\xxx
- 创建完成后添加路由：$router->resource('users', xxxController::class);
- 登录后台在权限管理中添加路由，菜单管理中添加菜单
- 角色管理中添加对应权限
