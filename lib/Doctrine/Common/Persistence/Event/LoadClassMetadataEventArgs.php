<?php
namespace Doctrine\Common\Persistence\Event;

use Doctrine\Common\EventArgs;
use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class that holds event arguments for a loadMetadata event.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 * @since  2.2
 */
class LoadClassMetadataEventArgs extends EventArgs
{
    /**
     * @var ClassMetadata
     */
    private $classMetadata;

    /**
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * Constructor.
     *
     * @param ClassMetadata $classMetadata
     * @param ObjectManager $objectManager
     */
    public function __construct(ClassMetadata $classMetadata, ObjectManager $objectManager)
    {
        $this->classMetadata = $classMetadata;
        $this->objectManager = $objectManager;
    }

    /**
     * Retrieves the associated ClassMetadata.
     *
     * @return ClassMetadata
     */
    public function getClassMetadata()
    {
        return $this->classMetadata;
    }

    /**
     * Retrieves the associated ObjectManager.
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }
}
