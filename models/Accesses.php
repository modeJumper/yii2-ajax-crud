<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accesses".
 *
 * @property string $title
 * @property string $url
 * @property string $access
 */
class Accesses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accesses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'url', 'access'], 'required'],
            [['url', 'access'], 'string'],
            [['title'], 'string', 'max' => 56],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Название проекта',
            'url' => 'Url',
            'access' => 'Доступы и комментарии',
        ];
    }
}
