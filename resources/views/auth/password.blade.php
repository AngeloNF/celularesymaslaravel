@extends('layout')


@section('cards')
    <div class="container p-5 text-white bg-black">
        <!-- Pills content -->
        <div class="p-5">
            <div class="tab-pane fade show active p-5" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form method="POST" action="{{ route('user-password.update') }}" id="formlogin">
                    @csrf
                    @method('POST')
                    <h2>Cambiar Contraseña</h2>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="ejemplo@celularesymas.com" />
                        <label class="form-label" for="loginName">Correo Electronico</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="password"
                            name="password"class="form-control @error('email') is-invalid @enderror" placeholder="********"/>
                        <label class="form-label" for="password">Contraseña</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="password_confirmation"
                            name="password_confirmation"class="form-control @error('email') is-invalid @enderror" placeholder="********"/>
                        <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!-- Submit button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary mb-4">Recuperar Contraseña</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Pills content -->
@endsection
