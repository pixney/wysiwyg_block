<?php

namespace Pixney\WysiwygBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\WysiwygBlockExtension\Block\BlockModel;

class WysiwygBlockExtension extends BlockExtension
{
    protected $provides = 'anomaly.module.blocks::block.wysiwyg';
    //protected $view     = 'theme::blocks/wysiwyg';
    protected $model = BlockModel::class;

    public function getView()
    {
        // dd('pixney.theme.esharawater::blocks/wysiwyg');
        // TODO:: GET active theme and do shit

        return 'pixney.theme.esharawater::blocks/wysiwyg';
    }

    // if ('theme::blocks/wysi') {
        //     dd('ja');
        // }
        // if ($this->block->configuration('something_special')) {
        //     return 'my_company.extension.awesome_block::alternate_view';
        // }

        // return $this->view;
    //}
}
