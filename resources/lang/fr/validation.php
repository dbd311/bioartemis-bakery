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

    "accepted" => "The :attribute must be accepted.",
    "active_url" => "The :attribute is not a valid URL.",
    "after" => "The :attribute must be a date after :date.",
    "alpha" => "The :attribute may only contain letters.",
    "alpha_dash" => "The :attribute may only contain letters, numbers, and dashes.",
    "alpha_num" => "The :attribute may only contain letters and numbers.",
    "array" => "The :attribute must be an array.",
    "before" => "The :attribute must be a date before :date.",
    "between" => [
        "numeric" => "The :attribute must be between :min and :max.",
        "file" => "The :attribute must be between :min and :max kilobytes.",
        "string" => "The :attribute must be between :min and :max characters.",
        "array" => "The :attribute must have between :min and :max items.",
    ],
    "boolean" => "Le champ ':attribute' doit être vrai ou faux.",
    "confirmed" => "La confirmation ':attribute' n'est pas correcte.",
    "date" => "L'attribut ':attribute' n'est pas une date valable.",
    "date_format" => "L'attribut ':attribute' ne correspond pas au format :format.",
    "different" => "Les attributs ':attribute' et ':other' doivent être différents.",
    "digits" => "L'attribut ':attribute' doit contenir :digits chiffres.",
    "digits_between" => "L'attribut ':attribute' doit contenir entre :min et :max chiffres.",
    "email" => "L'attribut ':attribute' doit être une adresse mail valable.",
    "filled" => "Le champ ':attribute' est requis.",
    "exists" => "L'attribut ':attribute' sélectionné n'est pas valable.",
    "image" => "L'attribut ':attribute' doit être une image.",
    "in" => "L'attribut ':attribute' n'est pas valable.",
    "integer" => "L'attribut ':attribute' doit être un entier.",
    "ip" => "L'attribut ':attribute' doit être une adresse IP valable.",
    "max" => [
        "numeric" => "L'attribut ':attribute' ne doit pas dépasser :max.",
        "file" => "L'attribut ':attribute' ne doit pas dépasser :max kilo-octets.",
        "string" => "L'attribut ':attribute' ne doit pas dépasser :max caractères.",
        "array" => "L'attribut ':attribute' ne doit pas contenir plus de :max éléments.",
    ],
    "mimes" => "L'attribut ':attribute' doit être un fichier de type: :values.",
    "min" => [
        "numeric" => "L'attribut ':attribute' doit être au minimum :min.",
        "file" => "L'attribut ':attribute' doit contenir au minimum :min kilo-octets.",
        "string" => "L'attribut ':attribute' doit contenir au minimum :min caractères.",
        "array" => "L'attribut ':attribute' doit contenir au minimum :min éléments.",
    ],
    "not_in" => "L'attribut ':attribute' sélectionné n'est pas valable.",
    "numeric" => "L'attribut ':attribute' doit être un chiffre.",
    "regex" => "Le format de l'attribut ':attribute' n'est pas valable.",
    "required" => "L'attribut ':attribute' est requis.",
    "required_if" => "L'attribut ':attribute' est requis lorsque l'attribut ':other' est égal à ':value'.",
    "required_with" => "L'attribut ':attribute' est requis lorsque :values est présent.",
    "required_with_all" => "L'attribut ':attribute' est requis lorsque :values est présent.",
    "required_without" => "L'attribut ':attribute' est requis lorsque :values est absent.",
    "required_without_all" => "L'attribut ':attribute' est requis lorsque aucune valeur :values n'est présente.",
    "same" => "L'attribut ':attribute' et ':other' doivent être similaires.",
    "size" => [
        "numeric" => "L'attribut ':attribute' doit être :size.",
        "file" => "L'attribut ':attribute' doit être égal à :size kilo-octets.",
        "string" => "L'attribut ':attribute' doit être égal à :size caractères.",
        "array" => "L'attribut ':attribute' doit contenir :size éléments.",
    ],
    "unique" => "L'attribut ':attribute' a été pris déjà.",
    "url" => "Le format de l'attribut ':attribute' n'est pas valable.",
    "timezone" => "L'attribut ':attribute' doit être une zône valable.",
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
      | The following language lines are used to swap attribute place-holders
      | with something more reader friendly such as E-Mail Address instead
      | of "email". This simply helps us make messages a little cleaner.
      |
     */
    'attributes' => [],
];