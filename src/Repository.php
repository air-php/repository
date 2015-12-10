<?php

namespace Air\Repository;

use Air\Mapper\MapperInterface;

class Repository
{
    /**
     * @var MapperInterface A mapper object.
     */
    protected $mapper;


    /**
     * Repository constructor.
     * @param MapperInterface $mapper A mapper object.
     */
    public function __construct(MapperInterface $mapper)
    {
        $this->mapper = $mapper;
    }
}
