<?php
/**
 * Created by PhpStorm.
 * User: MaxiUni
 * Date: 17.09.15
 * Time: 20:04
 */

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('lucky_number', new Route('/lucky/number/{count}', array(
    '_controller' => 'AppBundle:Lucky:number',
)));

return $collection;

?>