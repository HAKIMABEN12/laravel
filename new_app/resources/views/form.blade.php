<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <title>Form-page</title>
</head>
<body>
    <form method="POST" action="{{route('register')}}"  id="handleAjax" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control email @error('email') is-valid @enderror" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email" value="{{ old('email')}}">
            <span style="color:red"> @error ('email'){{ $message }} @enderror </span>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control password @error('password') is-valid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
            <span style="color:red"> @error ('password'){{ $message }} @enderror </span>
        </div>

        <div class="form-group">
            <label for="image">Upload image</label>
            <input type="file" class="form-control image @error('password') is-valid @enderror" id="image" name="image" placeholder="Password" value="{{ old('image') }}">
            <span style="color:red"> @error ('image'){{ $message }} @enderror </span>
        </div>
        <button type="submit" class="btn btn-primary submit">Submit</button>
    </form>

    
    <script src="{{asset('jquery.js')}}"></script>
    @push('particular-script')
    <script>
        // $(document).ready(function()
        // {
        //     $('#handleAjax').submit(function(e)
        //     {
        //         e.preventDefault();
        //         var data = {
        //             'email': $('.email').val(),
        //             'password': $('.password').val(),
        //             'image':$('.image')[0].files[0];
        //         };
        //         console.log(data);

                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });
                // console.log(data)
                // $.ajax({
                //     type: "POST",
                //     url: "{{ route('register') }}",
                //     data: data,
                //     dataType: "json",
                //     processData:false,
                //     contentType:false,
                //     cache:false,
                //     async:false,
                // });

             } );
        });
        
    </script>
    @endpush
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>
