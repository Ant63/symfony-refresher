<?php
/**
 * Created by PhpStorm.
 * User: anthonyaverill
 * Date: 05/10/2018
 * Time: 20:10
 */

namespace App\Controller;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController {

  /**
   * @\Symfony\Component\Routing\Annotation\Route()
   */
  public function homepage() {
    return new Response(
      'Homepage yeah'
    );
  }

  /**
   * @Route("/news/{slug}")
   */
  public function show($slug) {

    return new Response(sprintf(
      'this the page: %s',
      $slug
      )
    );

  }

}