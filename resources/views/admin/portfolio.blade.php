@extends('layouts.appadmin')

@section('title')
    Portfolio
@endsection
{{{ Form::hidden('', $increment = 1) }}}


@section('contenu')



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Portfolio</h4>
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
                        <th>Titre</th>
                        <th>Sous-titre</th>
                        <th>Image</th>
                        <th>Lien</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($portfolios as $portfolio)
                        <tr>
                            <td>{{$increment}}</td>
                            <td>{{$portfolio->title}}</td>
                            <td>{{$portfolio->subtitle}}</td>
                            <td><img src="storage/app_images/{{$portfolio->image}}" alt=""></td>
                            <td>{{$portfolio->link}}</td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="window.location ='{{url('/edit_portfolio/'.$portfolio->id)}}'">Edit</button>
                                <a class="btn btn-outline-danger" href="{{url('/delete_portfolio/'.$portfolio->id)}}" id="delete">Delete</a>
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
