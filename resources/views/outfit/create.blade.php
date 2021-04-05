 

 

 @extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
            <div class="card-header">
                <h2>Add Outfit</h2>
             </div>

               <div class="card-body">
                <form method="POST" action="{{route('outfit.store')}}">
                    <div class="form-group">
                        <label class="list-line__outfit__master">Type</label>
                            <input type="text" class="form-control" name="outfit_type" value="{{old('outfit_type')}}">
                            <small class="form-text text-muted">Outfits type</small>
                        </div>
                        <div class="form-group">
                            <label class="list-line__outfit__master">Color</label>
                            <input type="text" class="form-control" name="outfit_color" value="{{old('outfit_color')}}">
                            <small class="form-text text-muted">Outfits color</small>
                        </div>
                        <div class="form-group">
                            <label class="list-line__outfit__master">Size</label>
                            <input type="text" class="form-control" name="outfit_size" value="{{old('outfit_size')}}">
                            <small class="form-text text-muted">Outfits size</small>
                        </div>
                        <div class="form-group">
                            <label class="list-line__outfit__master">About: </label>
                            <textarea name="outfit_about" id="summernote"></textarea>
                            <small class="form-text text-muted">About this outfit</small>
                          </div>
                    <select name="master_id">
                        @foreach ($masters as $master)
                            <option value="{{$master->id}}">{{$master->name}} {{$master->surname}}</option>
                        @endforeach
                 </select>
                    @csrf
                    <div class="list-line__buttons">
                        <button type="submit" class="btn btn-info">ADD</button>
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
