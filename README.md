# Affinity4 HTML

Create HTML elements, forms and basic templating

## Installation

```bash
composer require affinity4/html
```

## Usage

```php
require_once __DIR__ . '/vendor/autoload.php';
use Affinity4\Html\Tag;

$Component = new Tag('ul', ['id' => 'listId'], [
    new Tag('li', ['data-id' => 1], 'One')
]);

// Cast to a string
echo (string) $Component; // <ul id="listId"><li data-id="1">One</li></ul>
```

## License

MIT License

Copyright (c) 2019 Affinity4

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
