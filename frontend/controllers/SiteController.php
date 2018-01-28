<?php
namespace frontend\controllers;

use common\models\Category;
use common\models\Designer;
use common\models\Mainpage;
use common\models\Partner;
use common\models\Subscribe;
use common\models\Video;
use frontend\models\SubscribeForm;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
        $model = Mainpage::findOne(1);
        $designers = Designer::find()->where(['show_on_page' => 1])->all();
        $partners = Partner::find()->all();
        return $this->render('index', [
            'model' => $model,
            'designers' => $designers,
            'partners' => $partners
        ]);
    }

    public function actionSubscribe()
    {
        $model = new SubscribeForm();
        $post = Yii::$app->request->post();

        if ($model->load($post) && $model->validate()) {
            $subscribe = Subscribe::findOne(['email' => $post['SubscribeForm']['email']]);

            if ($subscribe) {
                return 'already';
            } else {
                $subscribe = new Subscribe();
                $subscribe->email = $post['SubscribeForm']['email'];

                if($subscribe->save()) {
                    return 'success';
                } else {
                    return 'error';
                }
            }
        } else {
            return 'error';
        }
    }
}
