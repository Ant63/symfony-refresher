<?php
/**
 * Created by PhpStorm.
 * User: anthonyaverill
 * Date: 05/10/2018
 * Time: 20:10
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController {

  /**
   * @\Sensio\Bundle\FrameworkExtraBundle\Configuration\Route("/")
   */
  public function homepage() {
    return new Response('New homepage');
  }

}