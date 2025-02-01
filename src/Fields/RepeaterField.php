<?php

namespace CodeSmiths\LunarFilamentRepeaterField\Fields;

use Lunar\Exceptions\FieldTypeException;
use Lunar\FieldTypes\ListField;

class RepeaterField extends ListField
{
    /**
     * Return the value of this field.
     *
     * @return array
     */
    public function getValue()
    {
        return json_decode($this->value ?? '[]', true);
    }

    /**
     * Set the value of this field.
     *
     * @param  array|string  $value
     */
    public function setValue($value)
    {
        if (! is_array($value)) {
            // throw new FieldTypeException(self::class.' value must be an array.');
            $value = [];
        }

        $this->value = json_encode($value);
    }
}
