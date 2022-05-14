<?php

namespace Frosh\Rector\Rule\Class_;

use PHPStan\Type\ObjectType;

class InterfaceReplacedWithAbstractClass
{
    protected string $interface;
    protected string $abstractClass;

    public function __construct(string $interface, string $abstractClass)
    {
        $this->interface = $interface;
        $this->abstractClass = $abstractClass;
    }

    public function getInterface(): string
    {
        return $this->interface;
    }

    public function getAbstractClass(): string
    {
        return $this->abstractClass;
    }

    public function getInterfaceObject(): ObjectType
    {
        return new ObjectType($this->interface);
    }

    public function getAbstractClassObject(): ObjectType
    {
        return new ObjectType($this->abstractClass);
    }
}