<?php

namespace frontend\controllers;

use Yii;
use app\models\Atasan;
use app\models\AtasanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AtasanController implements the CRUD actions for Atasan model.
 */
class AtasanController extends Controller
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
     * Lists all Atasan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AtasanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Atasan model.
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
     * Creates a new Atasan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Atasan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id_atasan]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Atasan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id_atasan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Atasan model.
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
       $model = atasan::find()->All();
       $filename = 'Data-'.Date('YmdGis').'-Atasan.xls';
       header("Content-type: application/vnd-ms-excel");
       header("Content-Disposition: attachment; filename=".$filename);
       echo '<table border="1" width="100%">
           <thead>
               <tr>
                   <th>Id_atasan</th>
                   <th>Nama</th>
                   <th>NIP</th>
                   <th>Pangkat</th>
                   <th>Jabatan</th>
                   <th>Unit_Kerja</th>
               </tr>
           </thead>';
           foreach($model as $data){
               echo '
                   <tr>
                       <td>'.$data['Id_atasan'].'</td>
                       <td>'.$data['Nama'].'</td>
                       <td>'.$data['NIP'].'</td>
                       <td>'.$data['Pangkat'].'</td>
                       <td>'.$data['Jabatan'].'</td>
                       <td>'.$data['Unit_Kerja'].'</td>
                       
                   </tr>
               ';
           }
       echo '</table>';
   
       
    }
    /**
     * Finds the Atasan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Atasan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Atasan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
