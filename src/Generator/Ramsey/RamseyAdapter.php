<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-id
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-id
 */
declare(strict_types = 1);

namespace Vain\Id\Generator\Ramsey;

use Ramsey\Uuid\UuidFactoryInterface;
use Vain\Core\Id\Generator\AbstractIdGenerator;
use Vain\Core\Id\Generator\IdGeneratorInterface;

/**
 * Class RamseyAdapter
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class RamseyAdapter extends AbstractIdGenerator implements IdGeneratorInterface
{
    private $uuidFactoryInstance;

    /**
     * VainIdGeneratorRamseyAdapter constructor.
     *
     * @param UuidFactoryInterface $uuidFactory
     */
    public function __construct(UuidFactoryInterface $uuidFactory)
    {
        $this->uuidFactoryInstance = $uuidFactory;
    }

    /**
     * @inheritDoc
     */
    public function generate() : string
    {
        return $this->uuidFactoryInstance->uuid4()->toString();
    }
}