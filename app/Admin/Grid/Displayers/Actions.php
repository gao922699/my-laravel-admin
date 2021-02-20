<?php

namespace App\Admin\Grid\Displayers;


class Actions extends \Encore\Admin\Grid\Displayers\Actions
{
    /**
     * Render view action.
     *
     * @return string
     */
    protected function renderView()
    {
        return <<<EOT
<a href="{$this->getResource()}/{$this->getRouteKey()}" class="{$this->grid->getGridRowName()}-view">
    <button class="btn btn-xs btn-primary">查看</button>
</a>
EOT;
    }

    /**
     * Render edit action.
     *
     * @return string
     */
    protected function renderEdit()
    {
        return <<<EOT
<a href="{$this->getResource()}/{$this->getRouteKey()}/edit" class="{$this->grid->getGridRowName()}-edit">
    <button class="btn btn-xs btn-warning">编辑</button>
</a>
EOT;
    }

    /**
     * Render delete action.
     *
     * @return string
     */
    protected function renderDelete()
    {
        $this->setupDeleteScript();

        return <<<EOT
<a href="javascript:void(0);" data-id="{$this->getKey()}" class="{$this->grid->getGridRowName()}-delete">
    <button class="btn btn-xs btn-danger">删除</button>
</a>
EOT;
    }
}
