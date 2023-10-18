## Bamboo
Simple twig templating package for php projects


### Example

```

// Create templates directory at project root
#/ mkdir templates

// Create twig file in templates directory and add {{title}} template tag
#/ touch templates/index.twig

//Lavarel
use Bshelling\Bamboo\Stem\View;

class HomeController extends Controller {
	
	public function index() {
		return View::render('index.twig',['title' => 'Bamboo Title']);
	}
}

```