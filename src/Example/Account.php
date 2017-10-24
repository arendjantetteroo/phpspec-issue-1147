<?php

namespace Example;

use Doctrine\Common\Collections\ArrayCollection;

class Account
{
    /**
     * @var ArrayCollection[Segment]
     */
    private $segments;

    public function __construct()
    {
        $this->segments = new ArrayCollection();
    }

    public function segmentAccount(Segment $segment)
    {
        if ($this->segments->contains($segment)) {
            // ignore
        } else {
            $this->segments->add($segment);
        }
    }

    public function getSegments()
    {
        return $this->segments;
    }

    public function segmentFor(Cycle $businessCycle)
    {
        foreach ($this->segments as $segment) {
            if ($segment->forBusinessCycle($businessCycle)) {
                return $segment;
            }
        }
    }

}
