<?php

namespace App\Http\Controllers;

use App\Helpers\Pageable;
use App\Repository\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use Pageable;
    /**
     * @var BlogRepository
     */
    private $blogRepository;

    /**
     * BlogController constructor.
     * @param BlogRepository $blogRepository
     */
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $page = $this->getPageInfo('blog');
        $posts = $this->blogRepository->getLatest(8);
        $categories = $this->blogRepository->getBlogCategories();
        return view('blog.index', compact('posts', 'categories', 'page'));
    }

    public function show(string $slug)
    {
        $post = $this->blogRepository->getPost($slug);
        $categories = $this->blogRepository->getBlogCategories();
        $previous = $this->blogRepository->getPreviousRecord($slug);

        $next = $this->blogRepository->getNextRecord($slug);
        $related_posts = $this->blogRepository->getRelatedPosts($slug, $post->category_id);

        return view('blog.show',  compact('post', 'previous', 'next', 'related_posts', 'categories'));
    }
}
