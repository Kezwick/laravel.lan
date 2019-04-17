<li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{!! route('articles.index') !!}"><i class="fa fa-edit"></i><span>Статьи</span></a>
</li>



<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-bars"></i><span>Категории</span></a>
</li>

