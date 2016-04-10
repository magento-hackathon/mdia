<?php

namespace MagentoHackathon\Mdia\Model\MediaStorage\File;

class Uploader extends \Magento\MediaStorage\Model\File\Uploader
{
    public function save($destinationFolder, $newFileName = null)
    {
        return parent::save($destinationFolder, $newFileName);
    }

}