<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lib_subcategory".
 *
 * @property int $id
 * @property string $name_subcategory
 * @property int $category_id
 */
class LibSubcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lib_subcategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_subcategory', 'category_id'], 'required'],
            [['category_id'], 'integer'],
            [['name_subcategory'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_subcategory' => 'Name Subcategory',
            'category_id' => 'Category ID',
        ];
    }
}
