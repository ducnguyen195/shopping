<?php
namespace App\Traits;

trait GroupCategoryTrait
{
    public function getGroupName($model_type): string
    {
        return match ($model_type){
            'post' =>'bài viết',
            'product' =>' sản phẩm',
            default => '',
        };

    }

}
