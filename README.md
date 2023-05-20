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
        return view('example.index', compact('data'));
    }

    public function show()
    {
        // fetch single data
        $data = Fetch::getOne($url, $method);
        return view('example.show', compact('data'));
    }

    public function create()
    {
        // create data
        $data = Fetch::create($url, $method, $parameters);
        return view('example.index', compact('data'));
    }
}
```
