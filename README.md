## Bamboo
Simple twig templating package for php projects


### Example

```

// Create templates directory at project root
#/ mkdir templates

//Lavarel

use Bshelling\Bamboo\Stem\View;

class HomeController extends Controller {
	
	public function index() {
		return View::render('index.twig',['title' => 'Bamboo Title']);
	}
}

```