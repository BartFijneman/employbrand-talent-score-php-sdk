# Employbrand Talent Score PHP SDK

Connect your app to the Employbrand Talent Score application with the easy-to-use PHP SDK. When instantiating the EmploybrandTS class, you must provide the company ID and company access token. You can get these credentials form in the Employbrand Hub under 'Advanced > Employbrand API > Talent Score'.  

##Installation
```bash
composer require webbedrijf/employbrand-talent-score-php-sdk
```

##Usage
```php
$employbrandTS = new EmploybrandTS($companyId, $accessToken);
```
