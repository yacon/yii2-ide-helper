<?php

namespace yacon\IdeHelper\commands;

use Yii;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Command for manage ide helper component for Yii framework 2.x.x version.
 */
class IdeHelperController extends Controller
{
    /**
     * default action.
     */
    public $defaultAction = 'generate';

    /**
     * generate ide.
     *
     * @return void
     */
    public function actionGenerate()
    {
        $this->stdout('Starting generation...' . PHP_EOL, Console::FG_CYAN);
        Yii::$app->ideHelper->generate();
        $this->stdout('Done generation...' . PHP_EOL, Console::FG_GREEN);
    }
}
