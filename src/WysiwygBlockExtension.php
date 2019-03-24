<?php

namespace Pixney\WysiwygBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\WysiwygBlockExtension\Block\BlockModel;
use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;

class WysiwygBlockExtension extends BlockExtension
{
    protected $provides = 'anomaly.module.blocks::block.wysiwyg';
    protected $model    = BlockModel::class;
    protected $wrapper  = 'pixney.theme.esharawater::blocks/global/wrapper';

    public function getView()
    {
        $settings      = app(SettingRepositoryInterface::class);
        $setting       = $settings->get('streams::standard_theme');
        $this->wrapper = $setting->value . '::blocks/global/wrapper';
        return $setting->value . '::blocks/wysiwyg';
    }
}
