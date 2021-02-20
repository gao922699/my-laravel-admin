<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

use Encore\Admin\Form;
use Encore\Admin\Grid;

Encore\Admin\Form::forget(['map', 'editor']);

//把view目录从vendor中复制出来方便修改
app('view')->prependNamespace('admin', resource_path('views/admin'));

//初始化grid参数
Grid::init(function (Grid $grid) {
    $grid->filter(function (Grid\Filter $filter) {
        $filter->disableIdFilter();
    });
});

//初始化form参数
Form::init(function (Form $form) {
    $form->tools(function (Form\Tools $tools) {
        $tools->disableDelete();
    });

    $form->footer(function (Form\Footer $footer) {
        $footer->disableReset();
        $footer->disableViewCheck();
        $footer->disableEditingCheck();
        $footer->disableCreatingCheck();
    });
});
