<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class HotDeal extends Widget
{
    public function run()
    {
        return $this->render('hot-deal');
    }
}