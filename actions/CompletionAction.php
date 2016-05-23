<?php
namespace omgdef\fias\actions;

use Yii;
use omgdef\fias\models\FiasAddressSearch;
use yii\helpers\Json;

class CompletionAction extends \yii\base\Action
{
    public function run()
    {
        $model = new FiasAddressSearch();
        return Json::encode($model->search(Yii::$app->request->get('term', '')));
    }
}