<?php

namespace app\modules\admin\models;

class Number extends \yii\db\ActiveRecord
{    
    
    public static function tableName(){        
        return "ls_numbers";        
    }
    
    public static function getAll(){        
        return self::find()->all();       
    }
    
    public static function getOne($id){        
        return self::find()->where(['id' => $id])->one();       
    }
    
}
