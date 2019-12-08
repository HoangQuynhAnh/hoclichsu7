<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Student;

/**
 * SearchStudent represents the model behind the search form of `backend\models\Student`.
 */
class SearchStudent extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'classid', 'sex', 'status'], 'integer'],
            [['birthday', 'image', 'password_hash', 'user','name', 'auth_key', 'password_reset_token'], 'safe'],
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
        $query = Student::find();

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
            'status'=>[
                'desc' => ['status' => SORT_DESC],
                'asc' => ['status' => SORT_ASC],
            ],

            'created_at'=>[
                'desc' => ['created_at' => SORT_DESC],
                'asc' => ['created_at' => SORT_ASC],
            ],
            'updated_at'=>[
                'desc' => ['updated_at' => SORT_DESC],
                'asc' => ['updated_at' => SORT_ASC],
            ],
            'user'=>[
                'desc' => ['user' => SORT_DESC],
                'asc' => ['user' => SORT_ASC],
            ],
                'classid' => [
                'desc' => ['classid' => SORT_DESC],
                'asc' => ['classid' => SORT_ASC],
            ]
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
            'classid' => $this->classid,
            'sex' => $this->sex,
            'status' => $this->status,
            'name'=>$this->name,
        ]);

        $query->andFilterWhere(['like', 'birthday', $this->birthday])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token]);

        return $dataProvider;
    }
}
