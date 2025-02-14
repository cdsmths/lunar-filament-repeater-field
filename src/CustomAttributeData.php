<?php

namespace CodeSmiths\LunarFilamentRepeaterField;

use Filament\Forms\Components\Component;
use Lunar\Base\FieldType as FieldTypeContract;
use Lunar\Models\Attribute;

class CustomAttributeData extends \Lunar\Admin\Support\Forms\AttributeData
{
    public function getFilamentComponent(Attribute $attribute): Component
    {
        $component = parent::getFilamentComponent($attribute);

        $component
            ->formatStateUsing(function ($state) use ($attribute) {
                if (
                    ! $state instanceof FieldTypeContract ||
                    (get_class($state) !== $attribute->type)
                ) {
                    $state = new $attribute->type;
                }

                return $state->getValue();
            })
            ->mutateDehydratedStateUsing(function ($state) use ($attribute) {
                if (
                    ! $state instanceof FieldTypeContract ||
                    (get_class($state) !== $attribute->type)
                ) {
                    $field = (new $attribute->type);
                    $field->setValue($state);

                    return $field;
                }

                return $state;
            });

        return $component;
    }
}
