<?php

namespace Example;

class Segment
{
    /**
     * @var Cycle
     */
    private $cycle;

    /**
     * @return Cycle
     */
    public function businessCycle()
    {
        return $this->cycle;
    }
}
