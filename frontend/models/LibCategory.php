<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lib_category".
 *
 * @property int $id
 * @property string $name_category
 */
class LibCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lib_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_category'], 'required'],
            [['name_category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_category' => 'Name Category',
        ];
    }
    
     public function getLibSubcategories()
    {
        return $this->hasMany(LibSubcategory::className(), ['category_id' => 'id']);
    }
    
}
