@extends('layouts.appadmin')

@section('title')
    Experience professionnel
@endsection
{{{ Form::hidden('', $increment = 1) }}}


@section('contenu')



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Experience professionnel</h4>
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
                        <th>Nom du poste</th>
                        <th>Date</th>
                        <th>Lieu</th>
                        <th>Resumé</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($professionalExps as $professionalExp)
                        <tr>
                            <td>{{$increment}}</td>
                            <td>{{$professionalExp->title}}</td>
                            <td>{{date('j F Y', strtotime($professionalExp->date_start))}} / {{date('j F Y', strtotime($professionalExp->date_end))}}</td>
                            <td>{{$professionalExp->place}}</td>
                            <td>
                                <li>{{$professionalExp->resume_one}}</li>
                                <li>{{$professionalExp->resume_two}}</li>
                                <li>{{$professionalExp->resume_three}}</li>
                                <li>{{$professionalExp->resume_four}}</li>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="window.location ='{{url('/edit_education/'.$professionalExp->id)}}'">Edit</button>
                                <a class="btn btn-outline-danger" href="{{url('/delete_education/'.$professionalExp->id)}}" id="delete">Delete</a>
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
