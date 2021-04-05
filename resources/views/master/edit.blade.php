
 

 @extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
            <div class="card-header">
                <h2>Edit Master</h2>
             </div>

               <div class="card-body">

                <form method="POST" action="{{route('master.update',[$master->id])}}">
                    <div class="form-group">
                        <label class="list-line__outfit__master">Name:</label>
                        <input type="text" name="master_name" class="form-control" value="{{old('master_name',$master->name)}}">
                        <small class="form-text text-muted">Edit masters name</small>
                    </div>
                    <div class="form-group">
                        <label class="list-line__outfit__master">Surname:</label>
                        <input type="text" name="master_surname" class="form-control" value="{{old('master_surname',$master->surname)}}">
                        <small class="form-text text-muted">Edit masters surname</small>
                    </div>
                        
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
@endsection




