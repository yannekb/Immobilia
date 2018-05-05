@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(session('response'))
                <div class="success-block">
                    {{ session('response') }}
                </div>
            @endif
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ajouter un bien</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('postBien') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                                <label for="adress" class="col-md-4 control-label">Adresse</label>

                                <div class="col-md-6">
                                    <textarea id="adress" placeholder="Votre adresse..." class="form-control" name="adress" >{{ old('adress') }}</textarea>

                                    @if ($errors->has('adress'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('surface') ? ' has-error' : '' }}">
                                <label for="surface" class="col-md-4 control-label">Surface</label>

                                <div class="col-md-6">
                                    <input id="surface" type="text" class="form-control" name="surface" value="{{ old('surface') }}">

                                    @if ($errors->has('surface'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('surface') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('prix') ? ' has-error' : '' }}">
                                <label for="prix" class="col-md-4 control-label">Prix</label>

                                <div class="col-md-6">
                                    <input id="prix" type="text" class="form-control" name="prix" value="{{ old('prix') }}">

                                    @if ($errors->has('prix'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('prix') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type_contrat') ? ' has-error' : '' }}">
                                <label for="type_contrat" class="col-md-4 control-label">TYpe de contrat:</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="type_contrat" name="type_contrat">
                                        <option value="Location">Location</option>
                                        <option value="Vente">Vente</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type_bien') ? ' has-error' : '' }}">
                                <label for="type_bien" class="col-md-4 control-label">TYpe de contrat:</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="type_bien" name="type_bien">
                                        <option value="Maison">Maison</option>
                                        <option value="Appartement">Appartement</option>
                                        <option value="Terrain">Terrain</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
                                <label for="cover" class="col-md-4 control-label">Image:</label>
                                <input type="file" id="cover" name="cover">
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
