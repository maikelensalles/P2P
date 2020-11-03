@extends('layouts.app', ['title' => __('Cadastrar Usuário')])

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="p-4 bg-ligth">
                            <div class="pl-lg-4">
                            <h2>Cadastro de Usuário</h2> 
                            </div>
                                <form method="post" action="{{ route('revendas.store') }}" autocomplete="off">
                                    @csrf
                                    <div class="pl-lg-4">
                                        <div class="form-group{{ $errors->has('usuario') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="material-icons">person</i>
                                                    </span>
                                                </div>
                                                <label class="form-control-label" for="input-name"></label>
                                                <input type="text" name="usuario" id="input-usuario" class="form-control form-control-alternative{{ $errors->has('usuario') ? ' is-invalid' : '' }}" placeholder="Usuário" value="{{ old('usuario') }}" required autofocus>
                                                @include('alerts.feedback', ['field' => 'usuario'])
                                            </div>
                                        </div>

                                        <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="material-icons">email</i>
                                                </span>
                                              </div>
                                              <input type="email" name="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>
                                            </div>
                                            @if ($errors->has('email'))
                                              <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                              </div>
                                            @endif
                                          </div>
                                          <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="material-icons">lock_outline</i>
                                                </span>
                                              </div>
                                              <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Senha') }}" required>
                                            </div>
                                            @if ($errors->has('password'))
                                              <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                                <strong>{{ $errors->first('password') }}</strong>
                                              </div>
                                            @endif
                                          </div>

                                        {{--<div class="form-group{{ $errors->has('produto_categoria_id') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">Categoria</label>
                                            <select name="produto_categoria_id" id="input-categoria" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                                                @foreach ($categorias as $categoria)
                                                    @if($categoria['id'] == old('document'))
                                                        <option value="{{$categoria['id']}}" selected>{{$categoria['name']}}</option>
                                                    @else
                                                        <option value="{{$categoria['id']}}">{{$categoria['name']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @include('alerts.feedback', ['field' => 'produto_categoria_id'])
                                        </div>--}}

                                        <div class="form-group{{ $errors->has('master') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="material-icons">perm_contact_calendar</i>
                                                    </span>
                                                </div>
                                                <label class="form-control-label" for="input-master"></label>
                                                <input type="text" name="master" id="input-master" class="form-control form-control-alternative" placeholder="Master" value="{{ old('master') }}" required>
                                                @include('alerts.feedback', ['field' => 'master'])
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('creditos') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="material-icons">payment</i>
                                                    </span>
                                                </div>
                                                <label class="form-control-label" for="input-creditos"></label>
                                                <input type="number" name="creditos" id="input-creditos" class="form-control form-control-alternative" placeholder="Créditos" value="{{ old('creditos') }}" required>
                                                @include('alerts.feedback', ['field' => 'creditos'])
                                            </div>
                                        </div>
                                        <div class="text-center">
                                          <button type="submit" class="btn btn-success mt-4">Enviar</button>
                                      </div>
                                    </div>
                                </form>         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection