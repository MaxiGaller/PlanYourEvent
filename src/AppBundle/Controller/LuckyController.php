<?php
/**
 * Created by PhpStorm.
 * User: MaxiUni
 * Date: 17.09.15
 * Time: 11:34
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller {

    /**
     * @Route("/Lucky/Number")
     */
    public function numberAction() {
        $number = rand(0,100);

        return new Response( '<html><body>Lucky number: '.$number.'</body></html>' );
    }
}

?>