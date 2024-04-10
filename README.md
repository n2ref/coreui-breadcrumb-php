# CoreUI Breadcrumb

### Composer install

`composer install n2ref/coreui-breadcrumb-php`

### Example usage


```php
    $breadcrumb = new \CoreUI\Breadcrumb('id');
    $breadcrumb->setDivider('>');
    
    $breadcrumb->addItem('Page title 1', '/page-url-1');
    $breadcrumb->addItem('Page title 2', '/page-url-2');
    $breadcrumb->addItem('Current page title');
    
    echo json_encode($breadcrumb->toArray());
```

Output
```json
{
    "component": "coreui.breadcrumb",
    "id": "id",
    "divider": ">",
    "items": [
      { "text": "Page title 1", "url": "/page-url-1" },
      { "text": "Page title 2", "url": "/page-url-2" },
      { "text": "Current page title" }
    ]
}
```