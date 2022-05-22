# Employbrand Talent Score PHP SDK

Connect your app to the Employbrand Talent Score application with the easy-to-use PHP SDK. When instantiating the EmploybrandTS class, you must provide the company ID and company access token. You can get these credentials form in the Employbrand Hub under 'Advanced > Employbrand API > Talent Score'.  

## Installation
```bash
composer require employbrand/talent-score-php-sdk
```

## Usage
Creating the client.
```php
$client = new EmploybrandTSClient($companyId, $accessToken);
$client->...
```

Example
```php
$client = new EmploybrandTSClient($companyId, $accessToken);

# Get
$respondent = $client->respondents()->getById(1);

# Update
$respondent->firstName = 'Harry';
$client->respondents()->update($respondent->id, $respondent);

# Create
$client->respondents()->create([
    'first_name' => 'Harry',
    'email' => 'harry@example.com',
    'type' => 'candidate'
]);

# List
$list = $client->respondents()->list();
$list->query(['active' => true]);

$list->page(1); // get the first page
$list->all(); // load all results (multiple API calls)
```


## Documentation
This SDK is build based on the documentation publicly available at https://documentation.talent-score.employbrand.app/.
