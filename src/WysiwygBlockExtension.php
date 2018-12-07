<?php

namespace Pixney\WysiwygBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\WysiwygBlockExtension\Block\BlockModel;

class WysiwygBlockExtension extends BlockExtension
{
    protected $provides = 'anomaly.module.blocks::block.wysiwyg';
    protected $model    = BlockModel::class;

    public function getView()
    {
        // TODO : Either get active theme or config..
        return 'pixney.theme.esharawater::blocks/wysiwyg';

        // if ($this->block->configuration('something_special')) {
        //     return 'my_company.extension.awesome_block::alternate_view';
        // }
        // return $this->view;
    }
}
