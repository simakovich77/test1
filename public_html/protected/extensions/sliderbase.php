<?php
/* рассмотрим здесь "параметризированный" виджет*/
class AdminMenuWidget extends CWidget {

    /*в общем случаем может
    хранить целый массив свойст - нас же интересует
    только текущее действие
    - чтобы подсветить активный элемент меню*/
    public $params = array(
        // пусть по умолчанию будет активна ссылка на главную
        'action'=>'index',
        // следующие два не использую - просто для примера
        'parameter 2'=>'value 2',
        'parameter 3'=>'value 3',
    );

    public function run() {
        // передаем данные в представление виджета
        $this->render('adminmenu',array('params' => $this->params));
    }
}