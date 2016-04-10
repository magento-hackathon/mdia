<?php

namespace MagentoHackathon\Mdia\Helper;

class Image extends \Magento\Catalog\Helper\Image
{
    protected function getImageFile()
    {
        return 'sample.jpg'; //TODO: remove hardcoded image
    }

    public function getUrl()
    {
        $baseUrl = sprintf('%s/%s',
            'http://res.cloudinary.com', //TODO: get from config [service-url]
            'mdia' //TODO: get from config [cloud-name]
        );

        $transformations = $this->getTransformations();

        $url = $baseUrl;
        if (!empty($transformations)) {
            $url .= '/' . implode(',', $transformations);
        }
        $url .= '/' . $this->getImageFile();

        return $url;
    }

    public function getResizedImageInfo()
    {
        return null;
    }

    protected function applyScheduledActions()
    {
        //intentional no-op. This prevents creating local resized/cached images.
    }

    /**
     * @return array
     */
    public function getTransformations()
    {
        $sizeParams = array();
        if (!is_null($this->getWidth())) {
            $sizeParams[] = 'w_' . $this->getWidth();
        }
        if (!is_null($this->getHeight())) {
            $sizeParams[] = 'h_' . $this->getHeight();
            return $sizeParams;
        }
        return $sizeParams;
    }
}
