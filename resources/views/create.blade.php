@extends('layout.layout')
@section('content')

    <div class="container" align="center" style="margin: 120px 0">
{{--        @if($errors->any())--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <li>{{$error}}</li>--}}
{{--            @endforeach--}}
{{--        @endif--}}
    <form  method="post" enctype="multipart/form-data" action="{{route('foods.save')}}">

        <div class="box-body">
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Food Title</label>--}}
{{--                <input type="name" class="form-control @error('title') is-invalid @enderror"}}  placeholder="Name" name="title">--}}
{{--                @if($errors->has('title'))--}}
{{--                    <p class="text-danger">{{$errors->first('title')}}</p>--}}
{{--                @endif--}}
{{--                @error('title')--}}
{{--                    <p class="text-danger">{{$errors->first('title')}}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="exampleInputEmail1">Food Title</label>
                <input type="name" class="form-control"  placeholder="Name" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Expiration Day</label>
                <input type="name" class="form-control"  placeholder="Name" name="expiration_day">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Food Description</label>
                <input type="name" class="form-control"  placeholder="Name" name="description">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Food Price</label>
                <input type="name" class="form-control"  placeholder="Name" name="price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Food Image Url</label>
                <input type="name" class="form-control"  placeholder="Name" name="image">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Restaurant ID</label>
                <input type="name" class="form-control"  placeholder="Name" name="{{$user->id}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Ingredients</label>
                <select name="ingredients[]" id="" multiple>
                    @foreach($ingredients as $ingredient)
                        <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @csrf
{{--        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">--}}
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    </div>
@endsection
