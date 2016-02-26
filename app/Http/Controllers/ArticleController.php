<? 
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\Article;

    class ArticleController extends Controller {
        public function index() {
            return view('article.index', [
                'articleList' => Article::all()
            ]);
        }
    }