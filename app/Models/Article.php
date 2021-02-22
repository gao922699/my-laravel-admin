<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use \Encore\Admin\Traits\Resizable;

    const TYPE_NOTICE = 1;
    const TYPE_QA = 2;

    const TYPES = [
        self::TYPE_NOTICE => '通知公告',
        self::TYPE_QA => 'Q & A',
    ];

    public function adminUser()
    {
        return $this->belongsTo(config('admin.database.users_model'));
    }
}
