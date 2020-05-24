<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidContent implements Rule{

    private $min_words;
    /**
     * Create a new rule instance.
     *
     * @param integer $min_words
     * @return void
     */
    public function __construct($min_words=300)
    {
        $this->min_words=$min_words;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return str_word_count($value)>=$this->min_words;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The minimum words for the article to be valid is'.$this->min_words.'words or more';
    }

    
}




// class ValidContent implements Rule
// {
//     /**
//      * Create a new rule instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         //
//     }

//     /**
//      * Determine if the validation rule passes.
//      *
//      * @param  string  $attribute
//      * @param  mixed  $value
//      * @return bool
//      */
//     public function passes($attribute, $value)
//     {
//         if(str_word_count($value) >= 300)
//         {
//             return true;
//         }
//         return false;
//     }

//     /**
//      * Get the validation error message.
//      *
//      * @return string
//      */
//     public function message()
//     {
//         return 'Article content is too short, must be at least 300 words';
//     }
// }
