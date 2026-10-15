<form method="POST" action="{{ route('student.show') }}">
    @csrf

    <label for="StudID">Student ID:</label>
    <input type="text" id="StudID" name="StudID"><br><br>

    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname"><br><br>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <input type="submit" value="Register">
</form>


