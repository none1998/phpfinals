@extends('layout.layout')
@section('content')
    <div class="container" align="center" style="margin: 120px 0">
    <form  method="post" enctype="multipart/form-data" action="{{route('foods.update',$food->id)}}">
        @method('PUT')
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Food Title</label>
                <input type="name" class="form-control" name="title" value="{{old('title',$food->title)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Expiration Day</label>
                <input type="name" class="form-control" name="expiration_day" value="{{old('expiration_day',$food->expiration_day)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Food Description</label>
                <input type="name" class="form-control" name="description" value="{{old('description',$food->description)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Food Price</label>
                <input type="name" class="form-control" name="price" value="{{old('price',$food->price)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Food Image Url</label>
                <input type="name" class="form-control" name="image" value="{{old('image',$food->image)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ingredients</label>
                <select name="ingredients[]" id="" multiple>
{{--                    @foreach(food->ingredients as $ingredient)--}}
{{--                        <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>--}}
{{--                    @endforeach--}}
                        @foreach($ingredients as $ingredient)
                            <option value="{{$ingredient->id}}" @if($food->ingredients->firstWhere('id', $ingredient->id)) selected @endif>{{$ingredient->name}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        @csrf
{{--        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">--}}
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
@endsection
