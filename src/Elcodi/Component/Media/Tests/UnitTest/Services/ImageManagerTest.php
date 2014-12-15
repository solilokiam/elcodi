<?php
namespace Elcodi\Component\Media\Tests\UnitTest\Services;

use Elcodi\Component\Media\Services\ImageManager;

class ImageManagerTest extends \PHPUnit_Framework_TestCase
{
    private function getImageManager()
    {
        $validSizes = array(
            'width' => 11,
            'height' => 11,
            'type' => 1
        );

        $imageFactory = $this->getMockBuilder('Elcodi\Component\Media\Factory\ImageFactory')->getMock();
        $fileManager = $this->getMockBuilder('Elcodi\Component\Media\Services\FileManager')->setMethods(array('downloadFile'))->getMock();
        $resizeAdapter = $this->getMockBuilder('Elcodi\Component\Media\Adapter\Resizer\ResizeAdapterInterface')->getMock();

        $imageManager = new ImageManager($imageFactory,$fileManager,$resizeAdapter,$validSizes);

        return $imageManager;
    }

    public function testInvalidImageSize()
    {
        $imageManager = $this->getImageManager();
        $imageMock = '';

        $imageManager->resize($imageMock,10,10,1);
    }

    public function testValidImageSize()
    {
        $imageManager = $this->getImageManager();
        $imageMock = '';

        $imageManager->resize($imageMock,11,11,1);
    }
}
