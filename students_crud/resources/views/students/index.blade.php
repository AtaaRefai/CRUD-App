
@include('master.nav')
<h1>All the Students</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Student Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->student_level }}</td>

            <td>


                <a class="btn btn-small btn-success" href="{{ URL::to('students/' . $value->id) }}">Show this Student</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('students/' . $value->id.'/edit') }}">Edit this Student</a>
                <br><br>
                 <!--deletion form -->
                {{ Form::open(array('url' => 'students/'. $value->id .'/delete')) }}
                  {{ Form::submit('Delete this Student', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}
                
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>