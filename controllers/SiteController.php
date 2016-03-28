<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
//se app\models\LoginForm;
use app\models\ContactForm;
use \app\models\Characters;
use app\models\Castle;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

//    public function actionLogin()
//    {
//        if (!\Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
//        return $this->render('login', [
//            'model' => $model,
//        ]);
//    }
//
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionFiles()
    {
        return $this->render('files');
    }
    
    public function actionToppk()
    {
        $html = '';
        $characters = Characters::find()->select(['char_name','pkkills'])->where('pkkills > 0')->orderBy('pkkills DESC')->limit(10)->all();
        if (count($characters) > 0) {
            foreach ($characters as $character) {
                $html .= '<li class="list-group-item">';
                $html .= '<span class="badge">'. $character['pkkills'] .'</span>';
                $html .= $character['char_name'];
                $html .= '</li>';
            }
        }
        Yii::$app->response->format = \yii\web\Response::FORMAT_HTML;
        return $html;
    }
    
    public function actionToppvp()
    {
        $html = '';
        $characters = Characters::find()->select(['char_name','pvpkills'])->where('pvpkills > 0')->orderBy('pvpkills DESC')->limit(10)->all();
        if (count($characters) > 0) {
            foreach ($characters as $character) {
                $html .= '<li class="list-group-item">';
                $html .= '<span class="badge">'. $character['pvpkills'] .'</span>';
                $html .= $character['char_name'];
                $html .= '</li>';
            }
        }
        Yii::$app->response->format = \yii\web\Response::FORMAT_HTML;
        return $html;
    }
    
    public function actionCastle()
    {
        $html = '';
        $castles = Castle::find()->select(['name'])->orderBy('name')->all();
        if (count($castles) > 0) {
            foreach ($castles as $castle) {
                $html .= '<li class="list-group-item">';
                $html .= '<span class="badge">'. 'NPC' .'</span>';
                $html .= $castle['name'];
                $html .= '</li>';
            }
        }
        Yii::$app->response->format = \yii\web\Response::FORMAT_HTML;
        return $html;
    }
}
