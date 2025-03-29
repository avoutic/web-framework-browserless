# WebFramework Browserless Module

A module for WebFramework that provides PDF generation capabilities using the Browserless service.

## Installation

```bash
composer require avoutic/web-framework-browserless
```

## Requirements

- PHP 8.2 or higher
- WebFramework 8.x
- A Browserless service instance

## Configuration

If you are using the definition from _definitions/defitinions.php_. You can just add the following _browserless.php_ to your auth config directory (_config/auth_):

```php
<?php

return [
    'local_server' => 'http://your-local-server',
    'pdf_endpoint' => 'https://your-browserless-instance/pdf',
    'token' => 'your-browserless-token'
];
```

## Usage

The module provides methods to generate PDFs from web pages:

```php
$browserless->outputPdf('/path/to/page', 'output.pdf');
// or
$stream = $browserless->outputStream('/path/to/page');
```

## License

MIT License - see LICENSE file for details 