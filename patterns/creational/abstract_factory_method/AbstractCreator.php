<?php
declare(strict_types=1);

namespace patterns\creational\abstract_factory_method;

/**
 * La classe con il metodo factory astratto.
 * La classe concreta del prodotto verrà creata nella sottoclasse concreta.
 */
abstract class AbstractCreator
{
    /**
     * Metodo factory che dovrà essere implementato dalle sottoclassi
     */
    abstract public function CreateProduct() : AbstractProduct;

    public function DoSomeWorkWithProduct() : string
    {
        $product = $this->CreateProduct();

        return $product->DoWork();
    }
}
