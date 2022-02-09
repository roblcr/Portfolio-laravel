@extends('layouts.appadmin')

@section('title')
    Profile
@endsection
{{{ Form::hidden('', $increment = 1) }}}


@section('contenu')



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Profile</h4>
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
                        <th>Nom</th>
                        <th>Date d'anniversaire</th>
                        <th>Site Web</th>
                        <th>Numéro de telephone</th>
                        <th>Ville</th>
                        <th>Age</th>
                        <th>Niveau d'études</th>
                        <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($abouts as $about)
                        <tr>
                            <td>{{$increment}}</td>
                            <td>{{$about->name}}</td>
                            <td>{{$about->birthday}}</td>
                            <td>{{$about->website}}</td>
                            <td>{{$about->phone}}</td>
                            <td>{{$about->city}}</td>
                            <td>{{$about->age}}</td>
                            <td>{{$about->degree}}</td>
                            <td>{{$about->email}}</td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="window.location ='{{url('/edit_profile/'.$about->id)}}'">Edit</button>
                                <a class="btn btn-outline-danger" href="{{url('/delete_profile/'.$about->id)}}" id="delete">Delete</a>
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
