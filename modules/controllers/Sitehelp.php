<?php
namespace modules\site\controllers;

use Craft;
use craft\web\Controller;

class Sitehelp extends Controller
{
    public function actionIndex()
    {
        return $this->renderTemplate('ikrc/index', [
            'title' => 'IKRC Site Help',
            // Pass any variables you need
        ]);
    }
}
