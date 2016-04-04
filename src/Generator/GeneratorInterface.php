<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 10:09 AM
 */

namespace Vaind\Id\Generator;


interface GeneratorInterface
{
    /**
     * @return string
     */
    public function generate();
}