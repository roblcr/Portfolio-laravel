@extends('layouts.appadmin')

@section('title')
    Compétences
@endsection
{{{ Form::hidden('', $increment = 1) }}}


@section('contenu')



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Compétences</h4>
          @if (Session::has('status'))
                         <div class="alert alert-success">
                             {{Session::get('status')}}
                         </div>
                    @endif
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Nom de la compétence</th>
                        <th>Niveau de la compétence</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($skills as $skill)
                        <tr>
                            <td>{{$increment}}</td>
                            <td>{{$skill->skill_name}}</td>
                            <td>{{$skill->level}}/100</td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="window.location ='{{url('/edit_skill/'.$skill->id)}}'">Edit</button>
                                <a class="btn btn-outline-danger" href="{{url('/delete_skill/'.$skill->id)}}" id="delete">Delete</a>
                            </td>
                        </tr>
                        {{{ Form::hidden('', $increment=$increment + 1) }}}
                      @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>



@endsection

@section('scripts')
<script src="backend/js/data-table.js"></script>
@endsection
