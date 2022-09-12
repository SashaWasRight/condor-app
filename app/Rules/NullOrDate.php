<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class NullOrDate implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */

     // Custom rule made for validating endDate input
    public function __invoke($attribute, $value, $fail)
    {
        if($value !== null and !(request()->validate(['endDate'=>['date', 'after:tomorrow']])))
        {
            $fail('Value must be null or proper date in the future');
        }
    }
}
