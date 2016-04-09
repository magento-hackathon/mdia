<?php

namespace MagentoHackathon\Mdia\Helper;

class Image extends \Magento\Catalog\Helper\Image
{
    public function init($product, $imageId, $attributes = [])
    {
        parent::init($product, $imageId, $attributes);
    }
}
