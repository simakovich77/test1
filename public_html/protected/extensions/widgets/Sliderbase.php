<?php
/* рассмотрим здесь "параметризированный" виджет*/
class SliderBase extends CWidget {

    public function run() {
        // передаем данные в представление виджета
        $tSLIDER =Slider::model()->findAll();
        shuffle($tSLIDER);
        $data = [
            't_slider' => $tSLIDER,
        ];

        $this->render('slider',$data);
               
    }
}