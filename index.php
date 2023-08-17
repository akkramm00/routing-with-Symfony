<html>
  <head>
    <title>Routing et Symfony</title>
  </head>
  <body>
   <h1>Routing</h1>
    <p>
      When your applicatio receives a request, it calls a "controller action" to generate the response. The routing configuration defines witch action to run for each incoming URL.
      it also provides othder useful features , like generating SEO-freindly URLs(e.g /read/intro-to-symfony instead of index.php?article_id=57)
    </p>

    <h2>Creatting Routes</h2>
    <p>
      Routes can be configured in YAML, XML, PHP or using attributes. All formats provide the same features and performance, so choose your favorite. 
      Symfony recommends  "Attributes" because it's convenient to put the route and controller in the samme place.
    </p>
        <h2>Creatting Routes as Attributes</h2>

    <p>
      PHP attributes allow to define routes next to the code if the "controllers" associated to those routes.
      Attributes are native in PHP 8 and higherversions, so you can use them right away.
      You need to add a bit of configuration to your project before using them. If your project uses "Symfony flex" , this file is already greated for you. otherwise, create the following file manually:
    </p>
    <?php
#config/routes/attributes.yaml
controllers:
   resource:
        path: ../../src/Controller/
        namespace: App\Controller
          type: attribute


kernel:
resource: App\Kernel
type: attribute
      ?>
<p>
This configuration tells Symfony to look for routes defined as attributes on classes declareted in the App\Controller namespace and stored in the src/Controller directory witch follows the PSR-4 standard. The kkernel can act as a controller too, witch is especially useful for small that use Symfony as a microframework..

  Suppose you want to define a route for the /blog URL in your application. To do so, create a "controller class" like the following:
  <?php
//src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstracController
  {
    #[Route('/blog' , name:'blog_list')]
    public function list(): Response
    {
      //...
    }
  }
?>

  This configuration defines a route called "blog_list" that matches when the user requests the /blog URL. When the match occurs, the application runs the list() method of the BlogController class.

  If you define multiple classes in the same file, Symfony only loads the routes of the first class, ignoring all the other routes

  the route name(blog_list) is not important for now, but it xill be essential later when generating URLS. You only have to keep in mind that each route name must be unique in the application.
</p>

 <h2>Creating Routes in YAML, XML, or PHP Files</h2>

    <p>
      Instead of defining routes in the controller classes, you can define them in a separate YAML, XML, or PHP Files. The main advantage is that theydon't require any extra dependency.
      The main drawback is that you have to work with multiple files checking the routing of same controller action.
    </p>
  </body>
</html>