<?php

namespace Behavioral\TemplateMethod\Journeys;

class CityJourney extends \Behavioral\TemplateMethod\Journey
{

    /**
     * @inheritDoc
     */
    protected function enjoyVacation(): string
    {
        return "Eat, drink, take photos and sleep";
    }

    protected function buyGift(): ?string
    {
        return "Buy a gift";
    }
}