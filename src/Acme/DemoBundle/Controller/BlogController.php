<?php
namespace CUSE\PrivayRepoCentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//php app/console router:debug -> print all route
//php app/console router:debug article_show -> specific route
//php app/console router:match /articles/en/2012/article.rss -> route math
class BlogController extends Controller
{
    public function showAction($slug)
    {
        // use the $slug variable to query the database
        $blog = '';

        return $this->render('AcmeBlogBundle:Blog:show.html.twig', array(
            'blog' => $blog,
        ));
    }

	public function genUrlAction($slug)
	{
	        // ...

	        $url = $this->generateUrl(
	            'blog_show',
	            array('slug' => 'my-blog-post')
	        );
		//with absolute path
		$router->generate('blog_show', array('slug' => 'my-blog-post'), true);
		// http://www.example.com/blog/my-blog-post
		
		// by twig template
		// <a href="{{ url('blog_show', {'slug': 'my-blog-post'}) }}">
		//   Read this blog post.
		// </a>
		
		//with query string
		$router->generate('blog', array('page' => 2, 'category' => 'Symfony'));
		// /blog/2?category=Symfony
		
		//by twig template
		// <a href="{{ path('blog_show', {'slug': 'my-blog-post'}) }}">
		//   Read this blog post.
		// </a>
	}
}