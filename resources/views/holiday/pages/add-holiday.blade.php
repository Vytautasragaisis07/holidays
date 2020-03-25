@extends('holiday/main')
@section('content')

    <div class="site-section bg-light py-4">
        <div class="container">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/store-holiday" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5">
                        <div class="row justify-content-center">
                        <h3 class="mb-4 text-black">Pridėkite Kelionę</h3>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="title">Šalies Pavadinimas</label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-area" for="subject">Aprašymas</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Pridėti paveikslėlį</label>
                                <input type="file" id="img" name="img" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="row justify-content-center">
                                <input type="submit" value="Pridėti" class="btn btn-primary py-2 px-4 text-white">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>

    </div>

@stop
