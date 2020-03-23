@extends('holiday/main')
@section('content')


    <div class="site-section bg-light py-4">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mb-4 text-black">Valdykite Keliones</h3>
            </div>
            <div class="row">
            <div class="col-sm-8 offset-md-2">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Šalies Pavadinimas</th>
                        <th scope="col">Aprašymas</th>
                        <th scope="col">Šalinimas</th>
                        <th scope="col">Redagavimas</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($holidays as $holiday)
                        <tr>
                            <td>{{$holiday->title}}</td>
                            <td>{{$holiday->description}}</td>
                            <td><a href="/warning-holiday/{{$holiday->id}}">Šalinti</a></td>
                            <td><a href="/edit-product/holiday/{{$holiday->id}}">Redaguoti</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="buton">
                    <a class="btn btn-primary" href="/add-holiday" role="button">Pridėti kelionę</a>
                </div>
                <br>
            </div>
        </div>
    </div>
    </div>
@stop
