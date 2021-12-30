<?php

namespace backend\controllers;

use Yii;
use app\models\DataA29;
use app\models\Data_a29Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Data_a29Controller implements the CRUD actions for DataA29 model.
 */
class Data_a29Controller extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DataA29 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Data_a29Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataA29 model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DataA29 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DataA29();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataA29 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataA29 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    // Export Excell
    public function actionExcell()
    {
       // die('annas');
       $model = DataA29::find()->All();
       $filename = 'Data-'.Date('YmdGis').'-DataA29.xls';
       header("Content-type: application/vnd-ms-excel");
       header("Content-Disposition: attachment; filename=".$filename);
       echo '<table border="1" width="100%">
           <thead>
               <tr>
                   <th>id</th>
                   <th>pelaksana_pendidikan</th>
                   <th>angka_kredit</th>
                   <th>tempat</th>
                   <th>tanggal</th>
                   <th>keterangan</th>
               </tr>
           </thead>';
           foreach($model as $data){
               echo '
                   <tr>
                       <td>'.$data['id'].'</td>
                       <td>'.$data['pelaksana_pendidikan'].'</td>
                       <td>'.$data['angka_kredit'].'</td>
                       <td>'.$data['tempat'].'</td>
                       <td>'.$data['tanggal'].'</td>
                       <td>'.$data['keterangan'].'</td>
                       
                   </tr>
               ';
           }
       echo '</table>';
   
       
    }

    /**
     * Finds the DataA29 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DataA29 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DataA29::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
