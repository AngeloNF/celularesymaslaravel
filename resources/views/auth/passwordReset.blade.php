@extends('layout')


@section('cards')
    <div class="container p-5 text-white bg-black">
        <!-- Pills content -->
        <div class="p-5">
            <div class="tab-pane fade show active p-5" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form method="POST" action="{{ route('password.email') }}" id="formlogin">
                    @csrf
                    @method('POST')
                    <h2>Recuperar Contraseña</h2>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="ejemplo@celularesymas.com" />
                        <label class="form-label" for="loginName">Correo Electronico</label>
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
