<?php


namespace Elcodi\Component\Media\Tests\UnitTest\Services;


use DateTime;
use Elcodi\Component\Media\Entity\Interfaces\ImageInterface;

/**
 * Class EmptyImage
 * @package Elcodi\Component\Media\Tests\UnitTest\Services
 * @implements Elcodi\Component\Media\Entity\Interfaces\ImageInterface;
 */
class EmptyImage implements ImageInterface
{
    /**
     * @inheritdoc
     */
    public function setCreatedAt(DateTime $createdAt)
    {

    }

    /**
     * @inheritdoc
     */
    public function getCreatedAt()
    {
        return new \DateTime();
    }

    /**
     * @inheritdoc
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        // TODO: Implement setUpdatedAt() method.
    }

    /**
     * @inheritdoc
     */
    public function getUpdatedAt()
    {
        return new \DateTime();
    }

    /**
     * @inheritdoc
     */
    public function setPath($path)
    {
        // TODO: Implement setPath() method.
    }

    /**
     * @inheritdoc
     */
    public function getPath()
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function setId($id)
    {
        // TODO: Implement setId() method.
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return '1';
    }

    /**
     * @inheritdoc
     */
    public function setContentType($contentType)
    {
        // TODO: Implement setContentType() method.
    }

    /**
     * @inheritdoc
     */
    public function getContentType()
    {
        return 'image/jpg';
    }

    /**
     * @inheritdoc
     */
    public function setExtension($extension)
    {
        // TODO: Implement setExtension() method.
    }

    /**
     * @inheritdoc
     */
    public function getExtension()
    {
        return 'jpg';
    }

    /**
     * @inheritdoc
     */
    public function setSize($size)
    {
        // TODO: Implement setSize() method.
    }

    /**
     * @inheritdoc
     */
    public function getSize()
    {
        return 10;
    }

    /**
     * @inheritdoc
     */
    public function setContent($content)
    {
        // TODO: Implement setContent() method.
    }

    /**
     * @inheritdoc
     */
    public function getContent()
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function setWidth($width)
    {
        // TODO: Implement setWidth() method.
    }

    /**
     * @inheritdoc
     */
    public function getWidth()
    {
        return 10;
    }

    /**
     * @inheritdoc
     */
    public function setHeight($width)
    {
        // TODO: Implement setHeight() method.
    }

    /**
     * @inheritdoc
     */
    public function getHeight()
    {
        return 10;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'test.jpg';
    }

    /**
     * @inheritdoc
     */
    public function setName($name)
    {
        // TODO: Implement setName() method.
    }

}