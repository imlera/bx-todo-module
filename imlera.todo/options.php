<?php
/**
 * @global CUser $USER
 * @global CMain $APPLICATION
 */

use Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;

$tabs = [
    [
        'DIV' => 'GENERAL',
        'TAB' => Loc::getMessage('GENERAL_TAB'),
        'TITLE' => Loc::getMessage('GENERAL_TITLE'),
    ],
    [
        'DIV' => 'MODIFICATION',
        'TAB' => Loc::getMessage('MODIFICATION_NAME'),
        'TITLE' => Loc::getMessage('MODIFICATION_TITLE'),
    ],
];
$options = [
    'GENERAL' => [
        ['ENABLE_LOGGING', Loc::getMessage('ENABLE_LOGGING'), '', ['checkbox']],
    ],
    'MODIFICATION' => [
        Loc::getMessage('MODIFICATION_EMPLOYEE'),
        ['MODIFICATION_EMPLOYEE_ADD', Loc::getMessage('MODIFICATION_EMPLOYEE_ADD'), '', ['checkbox']],
        ['MODIFICATION_EMPLOYEE_UPDATE', Loc::getMessage('MODIFICATION_EMPLOYEE_UPDATE'), '', ['checkbox']],
        ['MODIFICATION_EMPLOYEE_DELETE', Loc::getMessage('MODIFICATION_EMPLOYEE_DELETE'), '', ['checkbox']],
        Loc::getMessage('MODIFICATION_PROFILE'),
        ['MODIFICATION_PROFILE_ADD', Loc::getMessage('MODIFICATION_PROFILE_ADD'), '', ['checkbox']],
        ['MODIFICATION_PROFILE_UPDATE', Loc::getMessage('MODIFICATION_PROFILE_UPDATE'), '', ['checkbox']],
        ['MODIFICATION_PROFILE_DELETE', Loc::getMessage('MODIFICATION_PROFILE_DELETE'), '', ['checkbox']],
        Loc::getMessage('MODIFICATION_TASK'),
        ['MODIFICATION_TASK_ADD', Loc::getMessage('MODIFICATION_TASK_ADD'), '', ['checkbox']],
        ['MODIFICATION_TASK_UPDATE', Loc::getMessage('MODIFICATION_TASK_UPDATE'), '', ['checkbox']],
        ['MODIFICATION_TASK_DELETE', Loc::getMessage('MODIFICATION_TASK_DELETE'), '', ['checkbox']],
    ],
];

$moduleId = $_GET['mid'];
$request = Application::getInstance()->getContext()->getRequest();
if (check_bitrix_sessid() && $request->getPost('save') === 'Y') {
    foreach ($options as $option) {
        __AdmSettingsSaveOptions($moduleId, $option);
    }
}

$tabControl = new CAdminTabControl('tabControl', $tabs);
$tabControl->Begin();
?>

<form method="POST"
      action="<?= $APPLICATION->GetCurPage() ?>?mid=<?= htmlspecialcharsbx($moduleId) ?>&lang=<?= LANGUAGE_ID ?>">

    <?php foreach ($options as $tab => $option): ?>
        <?php $tabControl->BeginNextTab(); ?>
        <?php __AdmSettingsDrawList($moduleId, $option); ?>
    <?php endforeach; ?>

    <?php $tabControl->Buttons(['btnApply' => false, 'btnCancel' => false, 'btnSaveAndAdd' => false]); ?>
    <?= bitrix_sessid_post() ?>
    <?php $tabControl->End(); ?>

</form>
