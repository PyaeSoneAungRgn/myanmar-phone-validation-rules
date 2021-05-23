# Myanmar Phone Number Validation Rules For Laravel

## Installation
```bash
composer require pyaesoneaung/myanmar-phone-validation-rules
```

## Usage

### MyanmarPhone
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\MyanmarPhone;

public function rules()
{
    return [
        'phone' => ['required', new MyanmarPhone()],
    ];
}
```

### MPT
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Mpt;

public function rules()
{
    return [
        'phone' => ['required', new Mpt()],
    ];
}
```

### Ooredoo
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Ooredoo;

public function rules()
{
    return [
        'phone' => ['required', new Ooredoo()],
    ];
}
```

### Telenor
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Telenor;

public function rules()
{
    return [
        'phone' => ['required', new Telenor()],
    ];
}
```

### Mytel
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Mytel;

public function rules()
{
    return [
        'phone' => ['required', new Mytel()],
    ];
}
```

### MEC
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Mec;

public function rules()
{
    return [
        'phone' => ['required', new Mec()],
    ];
}
```

## Credits
[Ko Htet Wai Yan Soe (myanmar-phone-number-php)](https://github.com/johnreginald/myanmar-phone-number-php)