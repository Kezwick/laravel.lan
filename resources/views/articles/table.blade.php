<table class="table table-responsive" id="articles-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Slug</th>
        <th>Image</th>
        <th>Intro</th>
        <th>Body</th>
        <th>Category Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{!! $article->title !!}</td>
            <td>{!! $article->slug !!}</td>
            <td>{!! $article->image !!}</td>
            <td>{!! $article->intro !!}</td>
            <td>{!! $article->body !!}</td>
            <td>{!! $article->category_id !!}</td>
            <td>
                {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('articles.show', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('articles.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>