<?php
/**
 * @author: Figueiredo Luiz <lffigueiredo@gmail.com>
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\FilmLocation;

class SiteController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDetail()
    {
        $id = $_REQUEST['id'];
        $films = new FilmLocation();
        $data = $films->findOne($id);
        $other = $films->findBy('title', $data->title);

        return $this->render('detail',
            [
                'data' => $data,
                'other' => $other
            ]
        );
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

}
