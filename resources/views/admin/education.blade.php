@extends('layouts.appadmin')

@section('title')
    Education
@endsection
{{{ Form::hidden('', $increment = 1) }}}


@section('contenu')



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Education</h4>
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
                        <th>Nom du titre</th>
                        <th>Date</th>
                        <th>Lieu</th>
                        <th>Resumé</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($educations as $education)
                        <tr>
                            <td>{{$increment}}</td>
                            <td>{{$education->title}}</td>
                            <td>{{date('j F Y', strtotime($education->date_start))}} / {{date('j F Y', strtotime($education->date_end))}}</td>
                            <td>{{$education->place}}</td>
                            <td>{{$education->resume}}</td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="window.location ='{{url('/edit_education/'.$education->id)}}'">Edit</button>
                                <a class="btn btn-outline-danger" href="{{url('/delete_education/'.$education->id)}}" id="delete">Delete</a>
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
