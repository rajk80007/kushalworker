<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Admin Login</title>
    <style>
        .temp {
            background-color: white;
            width: 100vw;
            height: 39px;
        }
        #alert {
            width:100%;
            display: flex;
            margin: auto;
            text-align:center;
            justify-content: space-around;
            font-size: 20px;
            padding: 10px;
        }
        .alert-danger{
            background-color:#ff00004a;
            color: red;
        }
        .alert-danger button{
            cursor: pointer;
        }
    </style>
</head>

<body>
    @if(session()->has('message'))

    <div id="alert" class="alert-danger">{{session()->get('message')}} 
         <button onclick="closeLine()">X</button>
    </div>

    @endif
    
    <form action="{{url('admin_dashboard')}}" method='POST' class='form-group'>
        @csrf
        <h1>Please login to continue to admin panel</h1>
        <div class='container'>
            <div> <label class='text-title'> Username </label>
                <input type='text' name='username' class='text-input' />
            </div>
            <div> <label class='text-title'> Password </label>
                <input type='password' name='password' class='text-input' />
            </div>
            <button class='btn btn-primary'> Submit </button>
        </div>
    </form>
        
    <script>
    function closeLine() {
        x = document.getElementById("alert");
        if (x.style.display = "block") {
            x.style.display = "none";
        }
    }
    </script>

</body>

</html>