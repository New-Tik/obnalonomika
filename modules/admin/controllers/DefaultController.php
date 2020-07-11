<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

use app\modules\admin\models\User;

/**
 * Default controller for the `Admin` module
 */
class DefaultController extends Controller {
    
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }
    
    public function actionUser_list() {
        
        $data['users'] = User::getAll();
        
        return $this->render('users/list',$data);
    }
    
    public function actionUser_edit($id) {
        
        $user = new User();
        
        $data['user'] = User::getOne($id);
        
        if($_POST['User']){
            $user->username = $_POST['User']['username'];
            $user->password = $_POST['User']['password'];
            $user->status = $_POST['User']['status'];
            
            if($user->validate() && $user->update()){
                return $this->redirect('/admin/default/user_list');
            }
            
        }
        
        return $this->render('users/edit', $data);
    }
    
    public function actionUser_add() {
        
        $user = new User();
        
        if($_POST['User']){
            $user->username = $_POST['User']['username'];
            $user->password = $_POST['User']['password'];
            $user->status = $_POST['User']['status'];
            
            if($user->validate() && $user->save()){
                return $this->redirect('/admin/default/user_list');
            }
            
        }
        
        return $this->render('users/edit', $data);
    }
    
    

}
