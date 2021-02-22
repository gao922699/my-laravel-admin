<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->column('id', 'ID');
        $grid->column('adminUser.name', '创建者');
        $grid->column('title', '标题');
        $grid->column('type', '类型')->using(Article::TYPES);
        $grid->column('cover', '封面')->display(function () {
            return $this->thumbnail('resized', 'cover');
//        })->lightbox();
        })->gallery();
        $grid->column('publish_at', '发布时间');
        $grid->column('created_at', '创建时间');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Article::findOrFail($id));

        $show->field('id', 'ID');
        $show->field('adminUser.name', '创建者');
        $show->field('title', '标题');
        $show->field('type', '类型')->using(Article::TYPES);
        $show->field('cover', '封面图')->image('',500,800);
        $show->field('content', '内容')->unescape();
        $show->field('publish_at', '发布时间');
        $show->field('created_at', '创建时间');
        $show->field('updated_at', '更新时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article());

        $form->text('title', '标题')->required();
        $form->select('type', '类型')->options(Article::TYPES)->setWidth(3,2)->required();
        $form->image('cover', '封面图')->setWidth(3,2)->move('cover')->uniqueName()->thumbnail('resized', 80, 50)->required();
        $form->date('publish_at', '发布时间')->default(date('Y-m-d'));
        $form->UEditor('content', '内容');
        $form->saving(function (Form $form) {
            $form->model()->admin_user_id = Admin::user()->id;
        });
        return $form;
    }
}
