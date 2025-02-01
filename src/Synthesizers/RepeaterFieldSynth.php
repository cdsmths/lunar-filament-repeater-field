<?php

namespace CodeSmiths\LunarFilamentRepeaterField\Synthesizers;

use CodeSmiths\LunarFilamentRepeaterField\Fields\RepeaterField;
use Lunar\Admin\Support\Synthesizers\ListSynth;

class RepeaterFieldSynth extends ListSynth
{
    public static $key = 'lunar_filament_repeater_field';

    protected static $targetClass = RepeaterField::class;

    public function dehydrate($target)
    {
        return [$target->getValue(), []];
    }

    public function hydrate($value)
    {
        return $value;
    }
}
