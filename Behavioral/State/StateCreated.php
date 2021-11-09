<?php


namespace Behavioral\State;

class StateCreated implements State
{
    public function proceedToNext(OrderContext $context)
    {
        //TODO Update DB
        //TODO send Notification to client
        //TODO ..etc
        $context->setState(new StateShipped());
    }

    public function toString(): string
    {
        return 'created';
    }
}
