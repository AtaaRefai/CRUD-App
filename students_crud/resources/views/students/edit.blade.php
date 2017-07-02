
@include('master.nav')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(array('url' => 'students/'.$student->id)) }}
  Name:<br>
  <input type="text" name="name" placeholder='{{ $student->name }}'>
  <br>
  Email:<br>
  <input type="text" name="email" placeholder='{{ $student->email }}'>
  <br>
  Level:<br>
  <select name='student_level'>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
 </select>
  <br><br>
{{ Form::submit('Update Info', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

</div>
</body>
</html>