@extends('layout.layout')
@section('content')
    <div class="container" align="center" style="margin: 120px 0">
    <form  method="post" enctype="multipart/form-data" action="{{route('foods.update',$food->id)}}">
        @method('PUT')
        <div>
            <div>
                <div><h3>{{$food->title}}</h3></div>
                <div><img style="border-radius: 8px" width="30%" src="{{$food->image}}"></div>
                </br>
                <div align="center">
                    <a onclick="myFunction()" href="{{route('foods.buy',$food->id)}}" class="text-sm text-gray-700 underline" style="
                        color: #fff !important;
                        text-transform: uppercase;
                        text-decoration: none;
                        background: #C70039;
                        padding: 2px 10px 1px;
                        border-radius: 5px;
                        display: inline-block;
                        border: none;
                        transition: all 0.4s ease 0s;">Buy Now</a>
                    <script>
                        function myFunction() {
                            alert("Thank You, You Bought The Product.");
                        }
                    </script>
                    <i class="fa fa-pencil-square"></i>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection
