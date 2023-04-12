<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Structural\Decorator\Bookings\DoubleRoomBooking;
use Structural\Decorator\Decorators\ExtraBed;
use Structural\Decorator\Decorators\WiFi;

class DecoratorTest extends TestCase
{

    public function testCanCalculatePriceForBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();

        $this->assertSame(40, $booking->calculatePrice());
        $this->assertSame('double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        $this->assertSame(42, $booking->calculatePrice());
        $this->assertSame('double room with wifi', $booking->getDescription());

    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new ExtraBed($booking);

        $this->assertSame(70, $booking->calculatePrice());
        $this->assertSame('double room with extra bed', $booking->getDescription());

    }
}