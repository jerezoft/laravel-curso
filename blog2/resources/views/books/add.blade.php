
<div class="container">
	<div class="row">
 
		<!--si el formulario contiene errores de validación-->
        @if($errors->has())
            <div class='alert alert-danger'>
                <!--recorremos los errores en un loop y los mostramos-->
                @foreach ($errors->all('<p>:message</p>') as $message)
                    [[ $message ]]
                @endforeach
            </div>
        @endif
 
		[[ Form::open(['route' => 'book.store']) ]]
 
		    [[ Form::textarea('book', @$book) ]]
 
		    [[ Form::submit('Send') ]]
 
		[[ Form::close() ]]
	</div>
</div>
@stop