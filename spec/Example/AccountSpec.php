<?php

namespace spec\Example;

use Example\Account;
use Example\Segment;
use Example\Cycle;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AccountSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Account::class);
    }

    function it_can_be_segmented(Segment $segment, Cycle $businessCycle)
    {
        $segment->businessCycle()->willReturn($businessCycle);

        $this->segmentAccount($segment);
        $this->segmentFor($businessCycle)->shouldReturn($segment);
    }
}
