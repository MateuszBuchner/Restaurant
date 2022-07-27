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

    "accepted"=> "Pole  musi zostać zaakceptowane.",
    "accepted_if"=> "Pole  musi zostać zaakceptowane gdy =>other ma wartość =>value.",
    "active_url"=> "Pole  jest nieprawidłowym adresem URL.",
    "after"=> "Pole  musi być datą późniejszą od =>date.",
    "after_or_equal"=> "Pole  musi być datą nie wcześniejszą niż =>date.",
    "alpha"=> "Pole  może zawierać jedynie litery.",
    "alpha_dash"=> "Pole  może zawierać jedynie litery, cyfry i myślniki.",
    "alpha_num"=> "Pole  może zawierać jedynie litery i cyfry.",
    "array"=> "Pole  musi być tablicą.",
    "attached"=> "Pole  jest już dołączony.",
    "before"=> "Pole  musi być datą wcześniejszą od =>date.",
    "before_or_equal"=> "Pole  musi być datą nie późniejszą niż =>date.",
    "between.array"=> "Pole  musi składać się z =>min - =>max elementów.",
    "between.file"=> "Pole  musi zawierać się w granicach =>min - =>max kilobajtów.",
    "between.numeric"=> "Pole  musi zawierać się w granicach =>min - =>max.",
    "between.string"=> "Pole  musi zawierać się w granicach =>min - =>max znaków.",
    "boolean"=> "Pole  musi mieć wartość logiczną prawda albo fałsz.",
    "confirmed"=> "Potwierdzenie pola  nie zgadza się.",
    "current_password"=> "Hasło jest nieprawidłowe.",
    "date"=> "Pole  nie jest prawidłową datą.",
    "date_equals"=> "Pole  musi być datą równą =>date.",
    "date_format"=> "Pole  nie jest w formacie =>format.",
    "declined"=> "Pole  musi zostać odrzucony.",
    "declined_if"=> "Pole  musi zostać odrzucony, gdy =>other ma wartość =>value.",
    "different"=> "Pole  oraz =>other muszą się różnić.",
    "digits"=> "Pole  musi składać się z =>digits cyfr.",
    "digits_between"=> "Pole  musi mieć od =>min do =>max cyfr.",
    "dimensions"=> "Pole  ma niepoprawne wymiary.",
    "distinct"=> "Pole  ma zduplikowane wartości.",
    "doesnt_start_with"=> "The  may not start with one of the following=> =>values.",
    "email"=> "Pole  nie jest poprawnym adresem e-mail.",
    "ends_with"=> "Pole  musi kończyć się jedną z następujących wartości=> =>values.",
    "enum"=> "Pole  ma niepoprawną wartość.",
    "exists"=> "Zaznaczone pole  jest nieprawidłowe.",
    "failed"=> "Błędny login lub hasło.",
    "file"=> "Pole  musi być plikiem.",
    "filled"=> "Pole  nie może być puste.",
    "gt.array"=> "Pole  musi mieć więcej niż =>value elementów.",
    "gt.file"=> "Pole  musi być większe niż =>value kilobajtów.",
    "gt.numeric"=> "Pole  musi być większe niż =>value.",
    "gt.string"=> "Pole  musi być dłuższe niż =>value znaków.",
    "gte.array"=> "Pole  musi mieć =>value lub więcej elementów.",
    "gte.file"=> "Pole  musi być większe lub równe =>value kilobajtów.",
    "gte.numeric"=> "Pole  musi być większe lub równe =>value.",
    "gte.string"=> "Pole  musi być dłuższe lub równe =>value znaków.",
    "image"=> "Pole musi być obrazkiem.",
    "in"=> "Zaznaczony element  jest nieprawidłowy.",
    "in_array"=> "Pole  nie znajduje się w =>other.",
    "integer"=> "Pole  musi być liczbą całkowitą.",
    "ip"=> "Pole  musi być prawidłowym adresem IP.",
    "ipv4"=> "Pole  musi być prawidłowym adresem IPv4.",
    "ipv6"=> "Pole  musi być prawidłowym adresem IPv6.",
    "json"=> "Pole  musi być poprawnym ciągiem znaków JSON.",
    "lt.array"=> "Pole  musi mieć mniej niż =>value elementów.",
    "lt.file"=> "Pole  musi być mniejsze niż =>value kilobajtów.",
    "lt.numeric"=> "Pole  musi być mniejsze niż =>value.",
    "lt.string"=> "Pole  musi być krótsze niż =>value znaków.",
    "lte.array"=> "Pole  musi mieć =>value lub mniej elementów.",
    "lte.file"=> "Pole  musi być mniejsze lub równe =>value kilobajtów.",
    "lte.numeric"=> "Pole  musi być mniejsze lub równe =>value.",
    "lte.string"=> "Pole  musi być krótsze lub równe =>value znaków.",
    "mac_address"=> "Pole  musi być prawidłowym adresem MAC.",
    "max.array"=> "Pole  nie może mieć więcej niż =>max elementów.",
    "max.file"=> "Pole  nie może być większe niż =>max kilobajtów.",
    "max.numeric"=> "Pole  nie może być większe niż =>max.",
    "max.string"=> "Pole  nie może być dłuższe niż =>max znaków.",
    "mimes"=> "Pole  musi być plikiem typu =>values.",
    "mimetypes"=> "Pole  musi być plikiem typu =>values.",
    "min.array"=> "Pole  musi mieć przynajmniej =>min elementów.",
    "min.file"=> "Pole  musi mieć przynajmniej =>min kilobajtów.",
    "min.numeric"=> "Pole  musi być nie mniejsze od =>min.",
    "min.string"=> "Pole  musi mieć przynajmniej =>min znaków.",
    "multiple_of"=> "Pole  musi być wielokrotnością wartości =>value",
    "next"=> "Następna &raquo;",
    "not_in"=> "Zaznaczony  jest nieprawidłowy.",
    "not_regex"=> "Format pola  jest nieprawidłowy.",
    "numeric"=> "Pole  musi być liczbą.",
    "password"=> "Hasło jest nieprawidłowe.",
    "password.letters"=> "The  must contain at least one letter.",
    "password.mixed"=> "The  must contain at least one uppercase and one lowercase letter.",
    "password.numbers"=> "The  must contain at least one number.",
    "password.symbols"=> "The  must contain at least one symbol.",
    "password.uncompromised"=> "The given  has appeared in a data leak. Please choose a different .",
    "present"=> "Pole  musi być obecne.",
    "previous"=> "&laquo; Poprzednia",
    "prohibited"=> "Pole  jest zabronione.",
    "prohibited_if"=> "Pole  jest zabronione, gdy =>other to =>value.",
    "prohibited_unless"=> "Pole  jest zabronione, chyba że =>other jest w =>values.",
    "prohibits"=> "Pole  zabrania obecności =>other.",
    "regex"=> "Format pola  jest nieprawidłowy.",
    "relatable"=> "Pole  nie może być powiązany z tym zasobem.",
    "required"=> "Pole jest wymagane.",
    "required_array_keys"=> "Pole  musi zawierać wartości=> =>values.",
    "required_if"=> "Pole  jest wymagane gdy =>other ma wartość =>value.",
    "required_unless"=> "Pole  jest wymagane jeżeli =>other nie znajduje się w =>values.",
    "required_with"=> "Pole  jest wymagane gdy =>values jest obecny.",
    "required_with_all"=> "Pole  jest wymagane gdy wszystkie =>values są obecne.",
    "required_without"=> "Pole  jest wymagane gdy =>values nie jest obecny.",
    "required_without_all"=> "Pole  jest wymagane gdy żadne z =>values nie są obecne.",
    "reset"=> "Hasło zostało zresetowane!",
    "same"=> "Pole  i =>other muszą być takie same.",
    "sent"=> "Przypomnienie hasła zostało wysłane!",
    "size.array"=> "Pole  musi zawierać =>size elementów.",
    "size.file"=> "Pole  musi mieć =>size kilobajtów.",
    "size.numeric"=> "Pole  musi mieć =>size.",
    "size.string"=> "Pole  musi mieć =>size znaków.",
    "starts_with"=> "Pole  musi zaczynać się jedną z następujących wartości=> =>values.",
    "string"=> "Pole  musi być ciągiem znaków.",
    "throttle"=> "Za dużo nieudanych prób logowania. Proszę spróbować za =>seconds sekund.",
    "throttled"=> "Proszę zaczekać zanim spróbujesz ponownie.",
    "timezone"=> "Pole  musi być prawidłową strefą czasową.",
    "token"=> "Token resetowania hasła jest nieprawidłowy.",
    "unique"=> "Taki  już występuje.",
    "uploaded"=> "Nie udało się wgrać pliku .",
    "url"=> "Format pola  jest nieprawidłowy.",
    "user"=> "Nie znaleziono użytkownika z takim adresem e-mail.",
    "uuid"=> "Pole  musi być poprawnym identyfikatorem UUID.",

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
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
