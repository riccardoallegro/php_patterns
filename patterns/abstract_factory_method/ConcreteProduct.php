<?php
declare(strict_types=1);

namespace patterns\abstract_factory_method;

/**
 * Definisce il prodotto concreto che verrà istanziato dalla factory
 */
class ConcreteProduct extends AbstractProduct
{
    const DO_WORK_STRING = 'ConcreteProduct::DoWork()';

    public function DoWork() : string
    {
        // NOTA che static:: usa il late binding, quindi usa la defininzione overridden, se esiste
        // altrimenti la definizione nella classe base. Se avessi usato self:: avrei sempre preso
        // la definizione della classe base.
        return static::DO_WORK_STRING;
    }
}
