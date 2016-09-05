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
declare(strict_types=1);

namespace Vain\Id\Generator;

/**
 * Interface IdGeneratorInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface IdGeneratorInterface
{
    /**
     * @return string
     */
    public function generate() : string;
}