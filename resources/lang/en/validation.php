<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    
    'custom' => [

        'nisn'          => [
            'required'  => 'NISN column must be filled in!',
            'digits'    => 'NISN column field must be 10 digit numbers!',
            'unique'    => 'NISN already used!'
        ],

        'student_name'  => [
            'required'  => 'STUDENT NAME column must be filled in',
            'string'    => 'STUDENT NAME column can only be filled with string!',
            'max'       => 'STUDENT NAME column can only be filled with max 30 character'
        ],

        'mtk_1'         => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'b_indo_1'      => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'b_ing_1'       => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'mtk_2'         => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'b_indo_2'      => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'b_ing_2'       => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'mtk_3'         => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'b_indo_3'      => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'b_ing_3'       => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'mtk_4'         => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
                
        ],

        'b_indo_4'      => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'b_ing_4'       => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'mtk_5'         => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'b_indo_5'      => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'b_ing_5'       => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_e_b_1'   => [
            
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_d_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_r_p_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_p_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_u_p_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_p_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_o_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_e_b_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_d_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_r_p_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_p_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_u_p_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_p_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_o_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_e_b_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_p_b_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_e_p_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_b_d_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_b_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_b_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_t_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_y_p_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_e_b_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_p_b_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_e_p_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_b_d_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_b_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_b_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_t_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_y_p_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_p_b_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_e_p_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_b_d_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_b_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_b_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_t_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_y_p_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_a_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'e_p_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'd_p_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_s_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_d_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_a_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'e_p_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'd_p_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_s_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_d_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_a_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_p_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_p_d_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_k_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_a_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_a_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_p_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_p_d_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_k_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_a_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_p_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_p_d_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_k_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_a_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_p_m_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_a_p_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'o_p_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_p_d_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_a_p_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_k_d_1'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_a_p_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'o_p_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_p_d_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'k_a_p_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        's_k_d_2'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_a_p_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_h_k_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_s_p_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_k_p_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_k_u_3'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'p_a_p_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_h_k_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_s_p_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_k_p_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_k_u_4'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_h_k_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_s_p_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_k_p_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],

        'a_k_u_5'   => [
            'required'  => 'SCORE column is required',
            'between'   => 'SCORE must be between 0 and 100',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
