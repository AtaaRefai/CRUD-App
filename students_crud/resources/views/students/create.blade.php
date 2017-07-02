<!-- app/views/nerds/create.blade.php -->
@include('master.nav')
<h1>Create a Student</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/students" method='post'>
  {{csrf_field()}}
  Name:<br>
  <input type="text" name="name" >
  <br>
  Email:<br>
  <input type="text" name="email">
  <br>
  Level:<br>
  <select name='student_level'>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  </select>
  <br><br>
  <input type="submit" value="Create">
</form> 

</div>
</body>
</html>