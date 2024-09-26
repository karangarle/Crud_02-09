<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.datatables.net/v/dt/dt-2.1.5/datatables.min.css" rel="stylesheet">
 
    <script src="https://cdn.datatables.net/v/dt/dt-2.1.5/datatables.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form action="{{route('user.addUser')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="password" placeholder="">
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="7048152****">
                        @error('phone')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <label for="gender">Gender:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="other" id="flexRadioDefault3" >
                        <label class="form-check-label" for="flexRadioDefault3">
                            Other
                        </label>
                      </div>
                      @error('gender')
                      <p class="text-danger">{{$message}}</p>
                  @enderror

                      <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" rows="3" name="address"></textarea>
                        @error('address')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                      </div>
    
                      <button type="submit" class="btn btn-primary">Add</button>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>