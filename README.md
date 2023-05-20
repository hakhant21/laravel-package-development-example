# Laravel Package Development Example

## Installation
You can install package via composer

```bash
composer require hak/data-fetcher
```

### Usage

```php
use Hak\DataFetcher\Facades\Fetch;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function index()
    {
        // fetch all data
        $data = Fetch::getAll($url, $method);
        return view('example', compact(data));
    }

    public function show()
    {
        // fetch single data
        $data = Fetch::getOne($url, $method);
        return view('example.show', compact(data));
    }
}
```
