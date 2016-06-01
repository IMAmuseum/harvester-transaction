##Harvester Transactions


###Composer Setup
```json
    "require": {
        "imamuseum/harvester-transaction": "^1.0"
    },
```

### Service Provider
In `config/app.php` add to the autoloaded providers -
```php
Imamuseum\HarvesterTransaction\HarvesterTransactionServiceProvider::class,
```

###Add TransactionLogTrait to Model
```php
class Object extends HarvesterObject
{
	use \Imamuseum\HarvesterTransaction\Traits\TransactionLogTrait;
}
```
