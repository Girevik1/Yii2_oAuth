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
     * @param $id
     * @return false|int
     */
    public function actionDownload($id)
    {
        $data = Media::findOne($id);
        header('Content-Type:' . pathinfo($data->filepath, PATHINFO_EXTENSION));
        header('Content-Disposition: attachment; filename=' . $data->filename);
        return readfile($data->filepath);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $data = Media::findOne($id);
        unlink($data->filepath);
        $data->delete();
        return $this->redirect(['index']);
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
