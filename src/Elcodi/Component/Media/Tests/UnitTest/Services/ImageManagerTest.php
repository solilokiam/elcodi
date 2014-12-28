<?php
namespace Elcodi\Component\Media\Tests\UnitTest\Services;

use Elcodi\Component\Media\Services\ImageManager;

class ImageManagerTest extends \PHPUnit_Framework_TestCase
{
    private function getImageManager()
    {
        $validSizes = array(
            array(
            'width' => 11,
            'height' => 11,
            'type' => 1
        ));

        $imageFactory = $this->getMockBuilder('Elcodi\Component\Media\Factory\ImageFactory')->getMock();
        $fileManager = $this->getMockBuilder('Elcodi\Component\Media\Services\FileManager')->setMethods(array('downloadFile'))->disableOriginalConstructor()->getMock();
        $resizeAdapter = $this->getMockBuilder('Elcodi\Component\Media\Adapter\Resizer\Interfaces\ResizeAdapterInterface')->setMethods(array('resize'))->getMock();

        $imageManager = new ImageManager($imageFactory,$fileManager,$resizeAdapter,$validSizes);

        return $imageManager;
    }

    public function testInvalidImageSize()
    {
        $imageManager = $this->getImageManager();
        $imageMock = new EmptyImage();

        $this->setExpectedException('Elcodi\Component\Media\Exception\InvalidImageSizeException');

        $imageManager->resize($imageMock,10,10,1);
    }

    public function testValidImageSize()
    {
        $imageManager = $this->getImageManager();
        $imageMock = new EmptyImage();

        $imageManager->resize($imageMock,11,11,1);
    }
}
