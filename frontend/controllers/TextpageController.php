<?php
namespace frontend\controllers;

use common\models\Designer;
use common\models\Event;
use common\models\LetterReview;
use common\models\Partner;
use common\models\Review;
use common\models\Textpage;
use common\models\VideoReview;
use Yii;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class TextpageController extends Controller
{
    public function actionIndex($alias)
    {
        $this->layout = 'textpage';
        $view = '';
        $model = Textpage::find()->where(['alias' => $alias])->one();

        if ($model) {
            switch($model->id) {
                case 1: $view = 'about';break;
                case 2: {
                    $events = Event::find()->orderBy(new Expression('field(id,4,1,2,3)'))->all();
                    return $this->render('events', [
                        'model' => $model,
                        'events' => $events
                    ]);
                }
                case 3: {
                    $view = 'news';break;
                    $page = (!empty($_GET['page']))? $_GET['page']: 1;
                    $limit = 5;
                    $offset = ($page == 1)? 0 : $page * $limit - $limit;
                    $news = News::find()
                        ->limit($limit)
                        ->offset($offset)
                        ->orderBy(['date' => SORT_DESC])
                        ->all();
                    $pagination = Catalog::pagination(count(News::find()->all()), $page, $limit);
                    return $this->render($view, [
                        'model' => $model,
                        'news' => $news,
                        'pagination' => $pagination,
                    ]);
                }
                case 4: {
                    $video_reviews = VideoReview::find()->all();
                    $reviews = Review::find()->all();
                    $letter_reviews = LetterReview::find()->orderBy(['sortOrder' => SORT_DESC])->all();
                    return $this->render('reviews', [
                        'model' => $model,
                        'video_reviews' => $video_reviews,
                        'reviews' => $reviews,
                        'letter_reviews' => $letter_reviews,
                    ]);
                }
                case 5: {
                    $partners = Partner::find()->all();
                    return $this->render('partners', [
                        'model' => $model,
                        'partners' => $partners
                    ]);
                }
                case 6: $view = 'contacts';break;
                case 7: {
                    $this->layout = 'main';
                    $designers = Designer::find()->where(['show_on_page' => 1])->orderBy(['sortOrder' => SORT_DESC])->all();
                    return $this->render('designers', [
                        'model' => $model,
                        'designers' => $designers
                    ]);
                }
                case 8: $view = 'videoobzory';break;
                default: throw new NotFoundHttpException();
            }
        } else {
            throw new NotFoundHttpException();
        }

        return $this->render($view, ['model' => $model]);
    }

    public function actionView($alias1, $alias2) {
        $this->layout = 'textpage';
        $parent = Textpage::find()->where(['alias' => $alias1])->one();

        if ($parent->id == 2) {
            $event = Event::find()->where(['alias' => $alias2])->one();

            return $this->render('event'.$event->id, ['model' => $event]);
        }
    }
}
