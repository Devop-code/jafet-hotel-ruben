<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneRule implements ValidationRule
{
    protected array $phone_patterns = [
        'cameroon' => '/^((\+)?237)?[67][0-9]{8}$/',
        'france' => '/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/',
        'usa' => '/^(?:\+?1)?\s*(?:\(\d{3}\))?\s*\d{3}-\d{4}$/',
        'canada' => '/^(?:\+?1)?(?:\s*\(\d{3}\)\s*|\s*\d{3}\s*-)?\d{3}-\d{4}$/',
        'ivc' => '/^\+(225)(0[157]|27)\d{8}$/',
        'belgium' => '/^\+(32)\s*[4689]\d{7,10}$/',
        'germany' => '/^\+(49)\s*(?:\d{2}\s*)?\d{7,10}$/',
        'spain' => '/^\+(34)\s?[679]\d{8}$/',
        'luxembourg' => '/^\+(352)\s?[2368]\d{6,7}$/'
    ];
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $flag = false;

        foreach ($this->phone_patterns as $pattern) 
        {
            if (preg_match($pattern, $value)) 
            {
                $flag = true;
                break;
            }
        }

        if ($flag === false) {
            $fail('Veuillez entrer un numéro de téléphone valide');
        }
    }
}
