@php
$randum_num = md5(random_bytes(64));
$captcha_code = substr($randum_num,0,6);

@endphp 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A platform for all solutions relating to typing and design and website designing projects. We provide all services related designing and developing websites. We also provide Hindi typing.">
    <link rel="stylesheet" href="css/main.css">
    <title>Contact Page - कुशल Workers</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8893177963617955"
     crossorigin="anonymous"></script>
     
</head>

<body>

    @include('header')
    @if(session()->has('message'))
    <div class='success' id = 'alert'> {{session()->get('message')}} <button type='button' class='close' data-dismiss='alert' aria-label='Close' onclick = 'closeLine()'><span aria-hidden='true'>&times;</span> </button> </div>


    @endif

 
    <div class="container">
        <h1>Contact Us</h1>
        <form action="{{url('contact_save')}}" class="form-group" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name" class="text-title"> Enter Your Name</label>
            <input id="name" name="name" type="text" class="text-input" placeholder="Enter name">
            <label for="email" class="text-title"> Enter your email id</label>
            <input type="email" id="email" name="email" class="text-input" placeholder="Enter email" required>
            <label for="phone" class="text-title"> Enter Your Mobile Number</label>
            <input type="number" class="text-input" id="mobile" name="mobile" placeholder="Enter mobile number"
                maxlength="10" required>
            <label for="" class="text-title">Category</label>
            <select name="category" id="category" class="text-input">
                <option value="HindiTyping">हिंदी टाइपिंग</option>
                <option value="EnglishTyping">English Typing</option>
                <option value="GraphicsDesign">Graphics Design</option>
                <option value="Excel">Advanced Excel Problems</option>
                <option value="WebDevelopment">Web Development</option>
                <option value="DataEntry">Data Entry</option>
            </select>
            <label for="image" class="text-title"> Upload image</label>
            <input type="file" name="file" id="file">
            <label for="query" class="text-title"> Write Details About your project</label>
            <textarea class="text-input" name="query" id="query" cols="30" rows="10"
                placeholder="Enter details"></textarea>
                <br>
                <div class="captcha"> <div class="captcha-d">{{$captcha_code}}</div> <input name="captcha_input" type="text" class="captcha_input" id="captcha_input" minlength = "6" maxlength = "6" required> </div>
            <input type="hidden" name="captcha" id="captcha" value = "'{{$captcha_code}}'">
                <br/>
        
            <input type='submit' role="button" class="btn btn-contact" value="Submit" >
        </form>
        <div class="mycont">
            <span>Contact email : </span> <i> rkeducationpoint20@gmail.com </i>
        </div>
    </div>


    @include('footer')
    <script>
    function closeLine(){
        x = document.getElementById("alert");
        if(x.style.display = "block"){
            x.style.display = "none";
        }
      }
     
    </script>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>