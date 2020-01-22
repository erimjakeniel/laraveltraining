<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body {
    background-color: #8AC0DE;
}
h2 {
    text-align: center;
}

.home {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
    width: 150px;
    height: 40px;
    border-radius: 100px;
}

.home:hover {
    background-color: #008CBA;
    color: white;
}
</style>

<body>
    <div class="row">
    <div class="col-sm-3 "></div>
        <div class="col-sm-6 ">
            <a href="{{route('store')}}"><button class="button home">HOME</button></a>
            <h2>UPDATE STUDENT</h2>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </!
                </div><br />
                @endif

                <form method="post" class="form" action="{{route('update', $human->id)}}">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" name="first_name" value="{{old('first_name',$human->first_name)}}" />
                        
                    </div>
                    <div class="form-group">
                        <label for="middle_name">Middle Name:</label>
                        <input type="text" class="form-control" name="middle_name" value="{{old('middle_name',$human->middle_name)}}" />

                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" value="{{old('last_name',$human->last_name)}}" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" value="{{old('email',$human->email)}}" />
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="text" class="form-control" name="age" value={{ $human->age }} />

                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" value="1" {{ old('gender', $human->gender == 1) ? 'checked' : '' }} /> Male
                        <input type="radio" name="gender"value="2" {{ old('gender', $human->gender == 2) ? 'checked' : '' }} /> Female
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" value="{{old('address',$human->address)}}" />
                    </div>
                    <button type="submit" class="btn btn-primary submit ">Update Student</button>
                    <div class="col-md-3"> </div>
                </form>

</body>

</html>