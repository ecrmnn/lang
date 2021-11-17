<?php

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

return [
    'accepted'             => 'ეს ველი უნდა იყოს მიღებული.',
    'accepted_if'          => 'ეს ველი უნდა იყოს მიღებული, როცა :other შეესაბამება :value.',
    'active_url'           => 'ეს არ არის სწორი ბმული.',
    'after'                => 'ეს უნდა იყოს თარიღის შემდეგ :date.',
    'after_or_equal'       => 'ეს უნდა იყოს თარიღი ან ტოლია :date.',
    'alpha'                => 'ეს ველი შეიძლება შეიცავდეს მხოლოდ წერილებს.',
    'alpha_dash'           => 'ამ სფეროში შეიძლება შეიცავდეს მხოლოდ ასოები, ნომრები, dashes და ხაზს უსვამს.',
    'alpha_num'            => 'ეს ველი შეიძლება შეიცავდეს მხოლოდ ასოები და ციფრები.',
    'array'                => 'ეს ველი უნდა იყოს მასივი.',
    'attached'             => 'ეს ველი უკვე ერთვის.',
    'before'               => 'ეს უნდა იყოს თარიღი ადრე :date.',
    'before_or_equal'      => 'ეს უნდა იყოს თარიღი ადრე ან ტოლია :date.',
    'between'              => [
        'array'   => 'ელემენტების რაოდენობა უნდა იყოს :min-დან :max-მდე.',
        'file'    => 'ამ ფაილის ზომა უნდა იყოს :min-დან :max-მდე კილობაიტი.',
        'numeric' => 'ღირებულება უნდა იყოს :min-დან :max-მდე.',
        'string'  => 'სიმბოლოების რაოდენობა უნდა იყოს :min-დან :max-მდე.',
    ],
    'boolean'              => 'ეს ველი უნდა იყოს ჭეშმარიტი ან ცრუ.',
    'confirmed'            => 'დადასტურება არ ემთხვევა.',
    'current_password'     => 'პაროლი არასწორია.',
    'date'                 => 'ეს არ არის სწორი თარიღი.',
    'date_equals'          => 'ეს უნდა იყოს თარიღი ტოლია :date.',
    'date_format'          => 'ეს არ ემთხვევა ფორმატი :format.',
    'declined'             => 'This value must be declined.',
    'declined_if'          => 'This value must be declined when :other is :value.',
    'different'            => 'ეს მნიშვნელობა უნდა იყოს განსხვავებული :other.',
    'digits'               => 'ეს უნდა იყოს :digits ციფრები.',
    'digits_between'       => 'ეს უნდა იყოს :min და :max ციფრები.',
    'dimensions'           => 'ეს სურათი არასწორი ზომები.',
    'distinct'             => 'ეს ველი აქვს დუბლიკატი ღირებულება.',
    'email'                => 'ეს უნდა იყოს სწორი ელექტრონული ფოსტის მისამართი.',
    'ends_with'            => 'ეს უნდა დასრულდეს ერთ-ერთი შემდეგი: :values.',
    'exists'               => 'შერჩეული ღირებულება არასწორია.',
    'file'                 => 'შინაარსი უნდა იყოს ფაილი.',
    'filled'               => 'ამ სფეროში უნდა ჰქონდეს მნიშვნელობა.',
    'gt'                   => [
        'array'   => 'ელემენტების რაოდენობა უნდა იყოს მეტი ვიდრე :value.',
        'file'    => 'ფაილის ზომა უნდა იყოს მეტი ვიდრე :value კილობაიტი.',
        'numeric' => 'ღირებულება უნდა იყოს მეტი ვიდრე :value.',
        'string'  => 'სიმბოლოების რაოდენობა უნდა იყოს მეტი ვიდრე :value.',
    ],
    'gte'                  => [
        'array'   => 'ელემენტების რაოდენობა უნდა იყოს მეტი ან შეესაბამებოდეს :value.',
        'file'    => 'ფაილის ზომა უნდა იყოს მეტი ან შეესაბამებოდეს :value კილობაიტს.',
        'numeric' => 'ღირებულება უნდა იყოს მეტი ან შეესაბამებოდეს :value.',
        'string'  => 'სიმბოლოების რაოდენობა უნდა იყოს მეტი ან შეესაბამებოდეს :value.',
    ],
    'image'                => 'ეს უნდა იყოს ფოტო.',
    'in'                   => 'შერჩეული ღირებულება არასწორია.',
    'in_array'             => 'ეს მნიშვნელობა არ არსებობს :other.',
    'integer'              => 'ეს უნდა იყოს მთელი რიცხვი.',
    'ip'                   => 'ეს უნდა იყოს სწორი IP მისამართი.',
    'ipv4'                 => 'ეს უნდა იყოს სწორი IPv4 მისამართი.',
    'ipv6'                 => 'ეს უნდა იყოს სწორი IPv6 მისამართი.',
    'json'                 => 'ეს უნდა იყოს სწორი json string.',
    'lt'                   => [
        'array'   => 'ელემენტების რაოდენობა უნდა იყოს :value-ზე ნაკლები.',
        'file'    => 'ფაილის ზომა უნდა იყოს :value კილობაიტზე ნაკლები.',
        'numeric' => 'ღირებულება უნდა იყოს :value-ზე ნაკლები.',
        'string'  => 'სიმბოლოების რაოდენობა უნდა იყოს :value-ზე ნაკლები.',
    ],
    'lte'                  => [
        'array'   => 'ელემენტების რაოდენობა უნდა იყოს ან შეესაბამებოდეს :value.',
        'file'    => 'ფაილის ზომა უნდა იყოს ან შეესაბამებოდეს :value კილობაიტს.',
        'numeric' => 'ღირებულება უნდა იყოს ნაკლები ან შეესაბამებოდეს :value.',
        'string'  => 'სიმბოლოების რაოდენობა უნდა იყოს ნაკლები ან შეესაბამებოდეს :value.',
    ],
    'max'                  => [
        'array'   => 'ელემენტების რაოდენობა არ უნდა აღემატებოდეს :max.',
        'file'    => 'ფაილის ზომა არ უნდა იყოს მეტი ვიდრე :max კილობაიტი.',
        'numeric' => 'ღირებულება არ უნდა იყოს მეტი ვიდრე :max.',
        'string'  => 'სიმბოლოების რაოდენობა არ უნდა იყოს მეტი ვიდრე :max.',
    ],
    'mimes'                => 'ეს უნდა იყოს ფაილის ტიპი: :values.',
    'mimetypes'            => 'ეს უნდა იყოს ფაილის ტიპი: :values.',
    'min'                  => [
        'array'   => 'ელემენტების რაოდენობა უნდა იყოს მინიმუმ :min.',
        'file'    => 'ფაილის ზომა უნდა იყოს მინიმუმ :min კილობაიტი.',
        'numeric' => 'ღირებულება უნდა იყოს მინიმუმ :min.',
        'string'  => 'სიმბოლოების რაოდენობა უნდა იყოს მინიმუმ :min ნიშანი.',
    ],
    'multiple_of'          => 'ღირებულება უნდა იყოს მრავალჯერადი :value',
    'not_in'               => 'შერჩეული ღირებულება არასწორია.',
    'not_regex'            => 'ეს ფორმატი არასწორია.',
    'numeric'              => 'ეს უნდა იყოს ნომერი.',
    'password'             => 'პაროლი არასწორია.',
    'present'              => 'ეს ველი წარმოდგენილი უნდა იყოს.',
    'prohibited'           => 'ეს ველი აკრძალულია.',
    'prohibited_if'        => 'ეს ველი აკრძალულია, როდესაც :other არის :value.',
    'prohibited_unless'    => 'ეს ველი აკრძალულია, თუ :other არის :values.',
    'prohibits'            => 'ამ ველში არ შეიძლება იყოს :other.',
    'regex'                => 'ეს ფორმატი არასწორია.',
    'relatable'            => 'ეს ველი არ შეიძლება იყოს დაკავშირებული ამ რესურსთან.',
    'required'             => 'ეს ველი აუცილებელია.',
    'required_if'          => 'ეს ველი არის საჭირო, როდესაც :other არის :value.',
    'required_unless'      => 'ეს ველი არ არის საჭირო, თუ :other არის :values.',
    'required_with'        => 'ეს ველი არის საჭირო, როდესაც :values იმყოფება.',
    'required_with_all'    => 'ეს ველი არის საჭირო, როდესაც :values იმყოფებიან.',
    'required_without'     => 'ეს ველი არის საჭირო, როდესაც :values არ იმყოფება.',
    'required_without_all' => 'ეს ველი არის საჭირო, როდესაც არც ერთი :values იმყოფებიან.',
    'same'                 => 'ღირებულება ამ სფეროში უნდა ემთხვეოდეს ერთი :other.',
    'size'                 => [
        'array'   => 'ელემენტების რაოდენობა უნდა იყოს :size.',
        'file'    => 'ფაილის ზომა უნდა იყოს :size კილობაიტი.',
        'numeric' => 'ღირებულება უნდა იყოს :size.',
        'string'  => 'სიმბოლოების რაოდენობა უნდა იყოს :size ნიშნა.',
    ],
    'starts_with'          => 'ეს უნდა დაიწყოს ერთი შემდეგი: :values.',
    'string'               => 'ეს უნდა იყოს სიმებიანი.',
    'timezone'             => 'ეს უნდა იყოს სწორი ზონაში.',
    'unique'               => 'ეს უკვე მიღებული.',
    'uploaded'             => 'ეს ვერ ატვირთეთ.',
    'url'                  => 'ეს ფორმატი არასწორია.',
    'uuid'                 => 'ეს უნდა იყოს სწორი UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
