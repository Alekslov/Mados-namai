

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
            <div class="card-header">
                <h2>Outfits List</h2>
             </div>

               <div class="card-body">
                    <ul class="list-group">
                        @foreach ($outfits as $outfit)
                        <li class="list-group-item list-line">
                            <div class="list-line__outfit__type">
                                {{$outfit->type}}
                                <div class="list-line__outfit__master"> 
                                    {{$outfit->outfitMaster->name}} 
                                    {{$outfit->outfitMaster->surname}}
                                </div>
                            </div>
                            <div class="list-line__buttons">
                                <a href="{{route('outfit.edit',[$outfit])}}" class="btn btn-info">EDIT</a>
                                <form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
                                @csrf
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                    </ul>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection


