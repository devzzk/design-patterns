<?php

namespace Behavioral\TemplateMethod\Journeys;

use Behavioral\TemplateMethod\Journey;

class BeachJourney extends Journey
{

    /**
     * @inheritDoc
     */
    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}