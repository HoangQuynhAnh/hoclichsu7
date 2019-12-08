<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Teacher;

/**
 * teacherSearch represents the model behind the search form of `backend\models\Teacher`.
 */
class teacherSearch extends Teacher
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user', 'status'], 'integer'],
            [['name', 'birthday', 'sex', 'email', 'address', 'sdt', 'sign', 'image'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Teacher::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->setSort([
        'attributes' => [
            'name'=>[
                'desc' => ['name' => SORT_DESC],
                'asc' => ['name' => SORT_ASC],
            ],
            'fullname'=>[
                'desc' => ['fullname' => SORT_DESC],
                'asc' => ['fullname' => SORT_ASC],
            ],
            'sex'=>[
                'desc' => ['sex' => SORT_DESC],
                'asc' => ['sex' => SORT_ASC],
            ],
            'status'=>[
                'desc' => ['status' => SORT_DESC],
                'asc' => ['status' => SORT_ASC],
            ],
            'user'=>[
                'desc' => ['user' => SORT_DESC],
                'asc' => ['user' => SORT_ASC],
            ],
              
        ]
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
            'user' => $this->user,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'birthday', $this->birthday])
                ->andFilterWhere(['>', 'sex',$this->sex])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'sdt', $this->sdt])
            ->andFilterWhere(['like', 'sign', $this->sign])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
