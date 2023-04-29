@extends('layout')


@section('cards')
    <div class="container p-5 text-white bg-black">
        <!-- Pills content -->
        <div class="p-5">
            <div class="tab-pane fade show active p-5" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form method="POST" action="{{ route('login') }}" id="formlogin">
                    @csrf
                    @method('POST')
                    <h2>Inicio de sesión</h2>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="ejemplo@celularesymas.com"/>
                        <label class="form-label" for="loginName">Correo Electronico</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="password"
                            name="password"class="form-control @error('email') is-invalid @enderror" placeholder="********"/>
                        <label class="form-label" for="loginPassword">Contraseña</label>
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                <label class="form-check-label" for="loginCheck"> Mantener Sesión </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="#!">Recuperar contraseña</a>
                        </div>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!-- Submit button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary mb-4">Iniciar Sesion</button>
                    </div>


                </form>
            </div>

        </div>
    </div>
    <!-- Pills content -->
@endsection
