

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
            <div class="card-header">
                <h2>Outfits List</h2>
                <a href="{{route('outfit.index', ['sort' => 'color'])}}" class="sort" > Sort by color </a>
                <a href="{{route('outfit.index', ['sort' => 'type'])}}" class="sort"> Sort by type </a>
                <a href="{{route('outfit.index')}}" class="sort"> Default </a>
             </div>

               <div class="card-body">
                    <ul class="list-group">
                        @foreach ($outfits as $outfit)
                        <li class="list-group-item list-line">
                            <div class="list-line__outfit__type">
                                {{$outfit->type}}
                                {{$outfit->color}}
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


