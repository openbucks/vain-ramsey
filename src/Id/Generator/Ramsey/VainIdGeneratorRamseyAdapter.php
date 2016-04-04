<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 10:13 AM
 */

namespace Vain\Id\Generator\Ramsey;

use Ramsey\Uuid\UuidFactoryInterface;
use Vaind\Id\Generator\VainIdGeneratorInterface;

class VainIdGeneratorRamseyAdapter implements VainIdGeneratorInterface
{
    private $uuidFactoryInstance;

    /**
     * VainIdGeneratorRamseyAdapter constructor.
     * @param UuidFactoryInterface $uuidFactory
     */
    public function __construct(UuidFactoryInterface $uuidFactory)
    {
        $this->uuidFactoryInstance = $uuidFactory;
    }

    /**
     * @inheritDoc
     */
    public function generate()
    {
        return $this->uuidFactoryInstance->uuid4();
    }
}