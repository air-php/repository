<?php

namespace Air\Repository;

use Air\Mapper\Mapper;

class Repository
{
    /**
     * @var Mapper A mapper object.
     */
    protected $mapper;


    /**
     * Repository constructor.
     * @param Mapper $mapper A mapper object.
     */
    public function __construct(Mapper $mapper)
    {
        $this->mapper = $mapper;
    }
}
