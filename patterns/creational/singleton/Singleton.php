<?php
declare(strict_types=1);

namespace patterns\creational\singleton;

/**
 * Classe Singleton... ma pensa un po'!
 */
class Singleton
{
    private static $instance;

    private $property;
    public function getProperty() : int
    {
        return $this->property;
    }

    public function setProperty(int $property)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * serve solo ad evitare che qualcuno istanzi la classe
     */
    private function __construct()
    {
    }

    public function getHash() : string
    {
        return spl_object_hash($this);
    }

    public static function GetInstance() : Singleton
    {
        if (! isset(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}
