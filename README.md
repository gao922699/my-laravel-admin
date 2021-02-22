# my-laravel-admin
基于 [zsong/laravel-admin](https://github.com/z-song/laravel-admin) 的后台，初始化一些配置，修改了一些不足之处

## 系统使用
- 根目录输入命令：docker-compose up -d
- 进入容器执行：composer install
- 配置env文件中的数据库和APP_URL
- 执行：php artisan migrate && php artisan db:seed

## 官方文档：
[https://laravel-admin.org/docs/zh/](https://laravel-admin.org/docs/zh/)

## 比较有用的插件
- [media-player媒体播放器](https://github.com/laravel-admin-extensions/media-player)
- [id-validator身份证验证&获取信息](https://github.com/laravel-admin-extensions/id-validator)
- [ueditor（已集成）](https://github.com/laravel-admin-extensions/UEditor)
- [图片裁剪上传](https://github.com/laravel-admin-extensions/cropper)
- [列表图集查看（已集成）](https://github.com/laravel-admin-extensions/grid-lightbox)
- [中国地区级联选择](https://github.com/laravel-admin-extensions/china-distpicker)
- [日期区间选择器](https://github.com/laravel-admin-extensions/daterangepicker)
- [错误日志查看](https://github.com/laravel-admin-extensions/reporter)


## 一些总结
[http://www.gaoqinghd.com/laravel-admin框架使用](http://www.gaoqinghd.com/laravel-admin框架使用)

## 添加一个crud
- 写migration创建数据表
- 创建model文件
- 创建控制器：php artisan admin:make xxxController --model=App\\Models\\xxx
- 创建完成后添加路由：$router->resource('xxx', xxxController::class);
- 登录后台在权限管理中添加路由，菜单管理中添加菜单
- 角色管理中添加对应权限
