<?php

namespace app\modules\admin\models;

class User extends \yii\db\ActiveRecord
{    
    
    public static function tableName(){        
        return "ls_users";        
    }
    
    public static function getAll(){        
        return self::find()->all();       
    }
    
    public static function getOne($id){        
        return self::find()->where(['id' => $id])->one();       
    }
    
}
