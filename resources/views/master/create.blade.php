
 
 @extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
            <div class="card-header">
                <h2>Add Master</h2>
             </div>
               <div class="card-body">
                <form method="POST" action="{{route('master.store')}}">
                    <div class="form-group">
                    <label class="list-line__outfit__master">Name</label>
                    <input type="text" class="form-control" name="master_name" value="{{old('master_name')}}">
                    <small class="form-text text-muted">Add new masters name</small>
                    </div>
                    <div class="form-group">
                    <label class="list-line__outfit__master">Surname</label>
                    <input type="text" class="form-control" name="master_surname" value="{{old('master_surname')}}">
                    <small class="form-text text-muted">Add new masters surname</small>
                    </div>
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
@endsection
