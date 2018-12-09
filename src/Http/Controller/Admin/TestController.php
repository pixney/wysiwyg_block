<?php namespace Pixney\WysiwygBlockExtension\Http\Controller\Admin;

use Pixney\WysiwygBlockExtension\Test\Form\TestFormBuilder;
use Pixney\WysiwygBlockExtension\Test\Table\TestTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TestController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TestTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TestTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TestFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TestFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TestFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TestFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
