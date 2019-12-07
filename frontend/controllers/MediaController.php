<?php

namespace frontend\controllers;

use Yii;
use common\models\Media;
use yii\web\UploadedFile;

class MediaController extends \yii\web\Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $data = Media::find()->all();
        return $this->render('index', ['medias' => $data]);
    }

    /**
     * @return string|void
     * @throws \yii\db\Exception
     */
    public function actionUpload()
    {
        $model = new Media();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $names = UploadedFile::getInstances($model, 'filename');
                foreach ($names as $name) {
                    $path = 'uploads/' . md5($name->baseName) . '.' . $name->extension;
                    if ($name->saveAs($path)) {
                        $filename = $name->baseName . '.' . $name->extension;
                        $filepath = $path;
                        Yii::$app->db->createCommand()->insert('media', ['filename' => $filename, 'filepath' => $filepath])->execute();
                    }
                }
                return $this->redirect(['index']);
            }
        }

        return $this->render('upload', [
            'model' => $model,
        ]);
    }

}
