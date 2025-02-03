<?php

namespace CodeSmiths\LunarFilamentRepeaterField\CustomAttributeData;

use CodeSmiths\LunarFilamentRepeaterField\Fields\RepeaterField;
use Filament\Forms\Components\Component;
use Lunar\FieldTypes\File as FileFieldType;
use Lunar\Models\Attribute;

class CustomAttributeData extends \Lunar\Admin\Support\Forms\AttributeData
{
    public function getFilamentComponent(Attribute $attribute): Component
    {
        $component = parent::getFilamentComponent($attribute);

        $component->formatStateUsing(function ($state) use ($attribute) {

            if (get_class($state) == 'CodeSmiths\LunarFilamentRepeaterField\Fields\RepeaterField') {
                return $state->getValue();
            }

            if (
                ! $state ||
                (get_class($state) != $attribute->type)
            ) {
                return new $attribute->type;
            }

            return $state;
        })
            ->dehydrateStateUsing(function ($state) use ($attribute) {
                if ($attribute->type == FileFieldType::class) {
                    return $state->getValue();
                }

                if ($attribute->type == RepeaterField::class) {
                    return $state;
                }

                return $state;
            })
            ->mutateDehydratedStateUsing(function ($state) use ($attribute) {
                if ($attribute->type == FileFieldType::class) {
                    $instance = new $attribute->type;
                    $instance->setValue($state);

                    return $instance;
                }

                if ($attribute->type == 'CodeSmiths\LunarFilamentRepeaterField\Fields\RepeaterField') {
                    $instance = new $attribute->type;
                    $instance->setValue($state);

                    return $instance;
                }

                if (
                    ! $state ||
                    (get_class($state) != $attribute->type)
                ) {
                    return new $attribute->type;
                }

                return $state;
            });

        return $component;

    }
}
