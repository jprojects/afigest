<?php

/**
 * @version     1.0.0 Deziro $
 * @package     Deziro
 * @copyright   Copyright © 2014 - All rights reserved.
 * @license	    GNU/GPL
 * @author	    kim
 * @author mail info@dezi.ro
 * @website	    http://www.dezi.ro
 *
*/

defined('_Afi') or die ('restricted access');

//$app->addStylesheet($config->site.'/template/'.$config->template.'/css/homepage.css');
$app->addScript('https://www.gstatic.com/charts/loader.js');
$app->addScript($config->site.'/template/'.$config->template.'/js/homepage.js');
