<?php
class IndexController extends Controller
{
    public function actionView()
    {
        return $this->view->render('/views/index.html');
    }
}
