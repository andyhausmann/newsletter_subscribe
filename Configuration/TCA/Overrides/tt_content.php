<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Zwo3.Subscribe',
    'Subscribe',
    'Subscribe to Addresslist',
    'EXT:subscribe/Resources/Public/Gfx/Extension.png'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Zwo3.Subscribe',
    'Unsubscribe',
    'Unsubscribe from Addresslist',
    'EXT:subscribe/Resources/Public/Gfx/Extension.png'
);


$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['subscribe_subscribe'] = 'layout,recursive,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['subscribe_subscribe'] = 'pi_flexform';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['subscribe_unsubscribe'] = 'layout,recursive,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['subscribe_unsubscribe'] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'subscribe_subscribe',
    'FILE:EXT:subscribe/Configuration/FlexForm/flexform_subscribe.xml',
    '*'
);\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'subscribe_unsubscribe',
    'FILE:EXT:subscribe/Configuration/FlexForm/flexform_unsubscribe.xml',
    '*'
);