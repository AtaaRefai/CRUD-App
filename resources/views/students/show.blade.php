@include('master.nav')
<h1>Showing {{ $student->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $student->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $student->email }}<br>
            <strong>Level:</strong> {{ $student->student_level }}
        </p>
    </div>

</div>
</body>
</html>