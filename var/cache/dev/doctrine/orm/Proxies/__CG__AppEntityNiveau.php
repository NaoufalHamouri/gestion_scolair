<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Niveau extends \App\Entity\Niveau implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'etudiants' => [parent::class, 'etudiants', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'notes' => [parent::class, 'notes', null],
        "\0".parent::class."\0".'updatedAt' => [parent::class, 'updatedAt', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'description' => [parent::class, 'description', null],
        'etudiants' => [parent::class, 'etudiants', null],
        'id' => [parent::class, 'id', null],
        'nom' => [parent::class, 'nom', null],
        'notes' => [parent::class, 'notes', null],
        'updatedAt' => [parent::class, 'updatedAt', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
