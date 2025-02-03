<?php

namespace CodeSmiths\LunarFilamentRepeaterField\FieldTypes;

use CodeSmiths\LunarFilamentRepeaterField\Synthesizers\RepeaterFieldSynth;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Lunar\Admin\Support\FieldTypes\ListField;
use Lunar\Models\Attribute;

class RepeaterFieldType extends ListField
{
    /**
     * Specify the Synthesizer for this field type
     */
    protected static string $synthesizer = RepeaterFieldSynth::class;

    /**
     * Define the Filament component for rendering
     */
    public static function getFilamentComponent(Attribute $attribute): Component
    {
        return Repeater::make($attribute->handle)
            ->columns(2)
            ->schema([
                TextInput::make('first_name')
                    ->label('First Name')
                    ->required(),
                TextInput::make('last_name')
                    ->label('Last Name')
                    ->required(),
            ])
            ->addable()
            ->deletable();
    }
}
