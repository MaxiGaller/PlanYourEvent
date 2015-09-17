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
     * @Route("/lucky/number/{count}")
     */
    public function numberAction($count)
    {
        if !$count {
            $count = "1";
        }

        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }
        $numbersList = implode(', ', $numbers);

        return new Response(
            '<html><body>Lucky numbers: '.$numbersList.'</body></html>'
        );
    }

}

?>