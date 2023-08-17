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
This configuration tells Symfony to look for routes defined as attributes on classes declareted in the App\Controller namespace and stored in the src/Controller directory witch follows the PSR-4 standard. The kkernel can act as a controller too, witch is especially useful for small that use Symfony as a microframework
  </body>
</html>