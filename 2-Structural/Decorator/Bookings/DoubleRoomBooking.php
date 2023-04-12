<?php

namespace Structural\Decorator\Bookings;

use Structural\Decorator\Interfaces\Booking;

class DoubleRoomBooking implements Booking
{

    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'double room';
    }
}