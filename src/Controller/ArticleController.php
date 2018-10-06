<?php
/**
 * Created by PhpStorm.
 * User: anthonyaverill
 * Date: 05/10/2018
 * Time: 20:10
 */

namespace App\Controller;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {

  /**
   * @Route("/", name="app_homepage")
   */
  public function homepage() {
    return $this->render(
      'article/homepage.html.twig'
    );
  }

  /**
   * @Route("/news/{slug}")
   */
  public function show($slug) {

    $comments = [
      'Credibly recaptiualize accurate mindshare without inexpensive human capital.',
      'Dramatically e-enable exceptional solutions after wireless methods of empowerment.',
      'Synergistically disseminate orthogonal processes through top-line schemas.'
    ];

    return $this->render(
      'article/show.html.twig',
      [
        'title' => ucwords(str_replace('-', ' ', $slug)),
        'content' => 'Synergistically brand progressive internal or "organic" 
        sources for quality meta-services. Monotonectally fabricate user 
        friendly information vis-a-vis progressive results. Seamlessly 
        maintain visionary systems via one-to-one experiences.',
        'comments' => $comments
      ]
    );

  }

}