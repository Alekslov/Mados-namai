

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
            <div class="card-header" >
               <h2>Masters List</h2>
               <a href="{{route('master.index', ['sort' => 'name'])}}" class="sort" > Sort by name </a>
               <a href="{{route('master.index', ['sort' => 'surname'])}}" class="sort"> Sort by surname </a>
               <a href="{{route('master.index')}}" class="sort"> Default </a>
</div>

            </div>
               <div class="card-body">
                <ul class="list-group">
                    @foreach ($masters as $master)
                    <li class="list-group-item list-line">
                        <div class="list-line__outfit__master">
                          {{$master->name}} {{$master->surname}}
                        </div>
                    <div class="list-line__buttons">
                        <a href="{{route('master.edit',[$master])}}" class="btn btn-info">EDIT</a>
                        <form method="POST" action="{{route('master.destroy', [$master])}}">
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
