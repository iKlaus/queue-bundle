<?php

namespace PetsDeli\QueueBundle\Client\Mock;

class MockNoopAdapter
{
    /**
     * @var mixed
     */
    private $response;

    /**
     * @param mixed $response
     */
    public function __construct($response = null)
    {
        $this->response = $response;
    }

    /**
     * @param       $name
     * @param array $arguments
     *
     * @return mixed
     */
    public function __call($name, array $arguments)
    {
        return $this->response;
    }
}
