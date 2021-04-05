


@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
            <div class="card-header">
                <h2>Edit Outfit</h2>
             </div>

               <div class="card-body">
                <form method="POST" action="{{route('outfit.update',[$outfit])}}">

                    <div class="form-group">
                        <label class="list-line__outfit__master">Type</label>
                            <input type="text" name="outfit_type"  class="form-control"value="{{old('outfit_type',$outfit->type)}}">
                            <small class="form-text text-muted">Modelio pavadinimas.</small>
                        </div>
                        <div class="form-group">
                            <label  class="list-line__outfit__master">Color</label>
                            <input type="text" name="outfit_color"  class="form-control" value="{{old('outfit_color',$outfit->color)}}">
                            <small class="form-text text-muted">Modelio spalva</small>
                        </div>
                        <div class="form-group">
                            <label  class="list-line__outfit__master">Size</label>
                            <input type="text" name="outfit_size"  class="form-control" value="{{old('outfit_size',$outfit->size)}}">
                            <small class="form-text text-muted">Modelio dydis</small>
                        </div>
                        <div class="form-group">
                            <label  class="list-line__outfit__master">About: </label>
                            <textarea name="outfit_about" id="summernote">{{$outfit->about}}</textarea>
                            <small class="form-text text-muted">About this outfit</small>
                          </div>
                    <select name="master_id">
                        @foreach ($masters as $master)
                            <option value="{{$master->id}}" @if($master->id == $outfit->master_id) selected @endif>
                                {{$master->name}} {{$master->surname}}
                            </option>
                        @endforeach
                </select>
                    @csrf
                    <div class="list-line__buttons">
                        <button type="submit" class="btn btn-info">EDIT</button>
                    </div>
                </form>
               </div>
           </div>
       </div>
   </div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        $('#summernote').summernote();
    });
    </script>
@endsection
