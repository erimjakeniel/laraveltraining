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

            <h2>ADD STUDENT</h2>
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </!
                </div><br />
                @endif


                <!-- <div class="row">
                    <div class="col-md-6"> -->
                <form method="post" class="form" action="{{route('store')}}" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" name="first_name" value="" autocomplete="adsfasdfad" />
                        <!-- <span class="error">
                            @if($errors->has('first_name'))
                            {{ $errors->first('first_name') }}
                            @endif
                        </span> -->
                    </div>
                    <div class="form-group">
                        <label for="middle_name">Middle Name:</label>
                        <input type="text" class="form-control" name="middle_name" value="" />
                        <!-- @if($errors->has('middle_name'))
                        <span class="error">
                            {{ $errors->first('middle_name') }}
                        </span>
                        @endif -->
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" value="" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" value="" autocomplete="adsfasdfad" />
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="text" class="form-control" name="age" value="" />
                        <!-- <span class="error">
                        @if($errors->has('age'))
                            {{ $errors->first('age') }}
                        @endif
                    </span> -->
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" value="1" /> Male
                        <input type="radio" name="gender" value="2" /> Female
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" value="" />
                    </div>
                    <button type="submit" class="btn btn-primary submit ">Add Student</button>

                    <div class="col-md-3"> </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>