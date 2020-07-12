<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\httpclient\Client;

use app\modules\admin\models\User;

use app\modules\admin\models\Number;

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
    
    //==============================================================================================
    
    public function actionNumber_list() {
        
        $data = [];
        
        $data['numbers'] = Number::getAll();
        
        return $this->render('number/list',$data);
    }
    
    public function actionNumber_add() {
        
        $data = [];
        
        $data['title'] = 'Add Number';
        
        $data['number'] = new Number();
        
        if($_POST['Number']){
            $data['number']->id = $_POST['Number']['id'];
            $data['number']->password = $_POST['Number']['password'];
            $data['number']->status = $_POST['Number']['status'];
            
            if($user->validate() && $user->save()){
                return $this->redirect('/admin/default/number_list');
            }
            
        }
        
        return $this->render('number/add', $data);
    }
    
    public function actionNumber_edit($id) {
        
        $data = [];
        
        $number = new Number();
        
        $data['number'] = Number::getOne($id);
        
        if($_POST['Number']){
            $data['number']->number = $_POST['Number']['number'];
            $data['number']->password = $_POST['Number']['password'];
            $data['number']->status = $_POST['Number']['status'];
            
            if($user->validate() && $user->update()){
                return $this->redirect('/admin/default/number_list');
            }
            
        }
        
        return $this->render('number/edit', $data);
    }
    
    //==============================================================================================

}
