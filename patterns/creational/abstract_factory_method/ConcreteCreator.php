<?php
declare(strict_types=1);

namespace patterns\creational\abstract_factory_method;

/**
 * La classe con il metodo factory astratto.
 * La classe concreta del prodotto verrà creata nella sottoclasse concreta.
 */
class ConcreteCreator extends AbstractCreator {
    /**
     * Metodo factory che dovrà essere implementato dalle sottoclassi
     */
    public function CreateProduct() : AbstractProduct
    {
        return new ConcreteProduct();
    }
}
?>
