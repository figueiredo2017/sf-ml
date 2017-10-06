<?php
/**
 * @author: Figueiredo Luiz <lffigueiredo@gmail.com>
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\FilmLocation;

class SearchController extends Controller
{

    public function actionIndex()
    {
        $key = 'title';
        if (!isset($_REQUEST[ 's' ])) {
            return false;
        }
        if (isset($_REQUEST[ 'k' ])) {
            $key = $_REQUEST[ 'k' ];
        }
        $search = $_REQUEST[ 's' ];

        $films = new FilmLocation();
        $out = $films->findBy($key, $search);

        return json_encode($out);
    }

}