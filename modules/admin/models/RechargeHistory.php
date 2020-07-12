<?php

namespace app\modules\admin\models;

class RechargeHistory extends \yii\db\ActiveRecord
{    
    
    public static function tableName(){        
        return "reg_recharge_history";        
    }
    
    public static function getAll(){        
        return self::find()->all();       
    }
    
    public static function getOne($id){        
        return self::find()->where(['id' => $id])->one();
    }
    
}
