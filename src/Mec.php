<?php

namespace PyaeSoneAung\MyanmarPhoneValidationRules;

use Illuminate\Contracts\Validation\Rule;
use CyberWings\MyanmarPhoneNumber;

class Mec implements Rule
{
	/**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
    	return (new MyanmarPhoneNumber())->is_telecom('mec', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be valid MEC number.';
    }
}