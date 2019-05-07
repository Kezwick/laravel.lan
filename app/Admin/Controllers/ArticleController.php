<?php

namespace App\Admin\Controllers;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ArticleController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article);

        $grid->id('Id');
        $grid->title('Title');
        //$grid->category_id('Category id');
        $grid->column('category.name','Категория');
        $grid->category()->name();
        $grid->slug('Slug');
        $grid->image('Image')->display(function ($name){
            $link = '<img width = "100" height="100" src="/uploads/';
            return $link.=$name.'">"';
        });
        $grid->intro('Intro');
        //$grid->body('Body');
        //$grid->created_at('Created at');
        //$grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Article::findOrFail($id));

        $show->id('Id');
        $show->title('Title');
        $show->slug('Slug');
        $show->image('Image')->display(function ($name){
            $link = '<img width = "100" height="100" src="/uploads/';
            return $link.=$name.'">"';
        });

        $show->image('image');
        $show->intro('Intro');
        $show->body('Body');
        $show->category_id('Категория');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article);

        $form->text('title', 'Title');
        $form->text('slug', 'Slug');
        $form->image('image', 'Image')->uniqueName();
        $form->textarea('intro', 'Intro');
        $form->textarea('body', 'Body');
        //$form->number('category_id', 'Category id');
        $form->select('category_id','Категория')->options(Category::all()->pluck('name', 'id'));

        return $form;
    }
}
