<?php

namespace Structural\Decorator\Decorators;

use Structural\Decorator\Interfaces\Booking;

abstract class BookingDecorator implements Booking
{
    public function __construct(protected Booking $booking)
    {
    }
}