<?php
declare(strict_types=1);

namespace patterns\abstract_factory_method;

/**
 * Definisce il prodotto astratto che verrà istanziato dalla factory
 */
abstract class AbstractProduct
{
    const DO_WORK_STRING = 'AbstractProduct::DoWork()';

    public function DoWork() : string
    {
        return static::DO_WORK_STRING;
    }
}
