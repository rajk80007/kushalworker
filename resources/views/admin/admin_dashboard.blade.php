<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Admin Dashboard</title>

</head>

<body>
    @include('header')
    <!-- Remove "Style" tag After Page Complete -->
    <button class='btn logout-btn'><a class="logout-input" href="{{url('logout')}}">Logout </a></button>
    <div class="admin-container">
        <h1> All records </h1>
        <table>
            <thead class="t-head">
                <tr>
                    <th class="t-item">S No.</th>
                    <th class="t-item">UserName</th>
                    <th id='t-email' class="t-item">Email ID</th>
                    <th class="t-item">Mobile No.</th>
                    <th class="t-item">Category</th>
                    <th id="t-query" class="t-item">Query</th>
                    <th class="t-item">image</th>
                </tr>
            </thead>
            <tbody>
                <input type="hidden" value='{{$i=1}}'>
                @foreach ($data as $data)
                <tr>
                    <td class="t-item">{{$i++}}</td>
                    <td class="t-item">{{$data->name}}</td>
                    <td class="t-item">{{$data->email}}</td>
                    <td class="t-item">{{$data->mobile}}</td>
                    <td class="t-item">{{$data->cat_id}}</td>
                    <td class="t-item">{{$data->query}}</td>
                    @if($data->image_url)
                    <td class="t-item"><a href="{{url('/file_image/'.$data->image_url)}}" target="_blank">Download Image</a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
    </div>



</body>

</html>