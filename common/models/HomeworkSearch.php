<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Homework;

/**
 * HomeworkSearch represents the model behind the search form about `app\models\Homework`.
 */
class HomeworkSearch extends Homework
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'thema_id'], 'integer'],
            [['homework_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Homework::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'thema_id' => $this->thema_id,
        ]);

        $query->andFilterWhere(['like', 'homework_name', $this->homework_name]);

        return $dataProvider;
    }
}
