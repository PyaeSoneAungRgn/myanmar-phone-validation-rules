# Myanmar Phone Number Validation Rules For Laravel

## Installation
```bash
composer require pyaesoneaung/myanmar-phone-validation-rules
```

## Usage

### MyanmarPhone
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\MyanmarPhone;

$request->validate([
    'phone' => ['required', new MyanmarPhone],
]);
```

### MPT
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Mpt;

$request->validate([
    'phone' => ['required', new Mpt],
]);
```

### Ooredoo
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Ooredoo;

$request->validate([
    'phone' => ['required', new Ooredoo],
]);
```

### Telenor
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Telenor;

$request->validate([
    'phone' => ['required', new Telenor],
]);
```

### Mytel
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Mytel;

$request->validate([
    'phone' => ['required', new Mytel],
]);
```

### MEC
```php
use PyaeSoneAung\MyanmarPhoneValidationRules\Mec;

$request->validate([
    'phone' => ['required', new Mec],
]);
```

## Credits
[Ko Htet Wai Yan Soe (myanmar-phone-number-php)](https://github.com/johnreginald/myanmar-phone-number-php)