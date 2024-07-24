<?php
namespace App\Traits;

trait GroupImageTrait
{
    public function getImageName ($type) {
        return match ($type){
          'product' => 'sản phẩm',
          'post' => 'bài viết',
        };
    }
}
