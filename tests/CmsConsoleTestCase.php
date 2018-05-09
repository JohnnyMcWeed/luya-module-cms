<?php

namespace cmstests;

use luya\testsuite\cases\ConsoleApplicationTestCase;

class CmsConsoleTestCase extends ConsoleApplicationTestCase
{
    public function getConfigArray()
    {
        return [
            'id' => 'basetestcase',
            'basePath' => dirname(__DIR__),
            'components' => [
                'db' => [
                    'class' => 'yii\db\Connection',
                    'dsn' => 'sqlite::memory:',
                ]
            ],
            'modules' => [
                'admin' => 'luya\admin\Module',
                'cms' => [
                    'class' => '\luya\cms\frontend\Module'
                ],
                'cmsadmin' => 'luya\cms\admin\Module',
                'CmsUnitModule' => '\cmstests\data\modules\CmsUnitModule',
            ],
        ];
    }
}
