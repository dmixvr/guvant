<div class="form-group row">
    <label for="username" class="col-4 col-form-label">Nombre Usuario</label>
    <div class="col-8">
        <input value="@isset($user){{$user->name}}@endisset" id="name" name="name" type="text" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Contraseña</label>
    <div class="col-8">
        <input id="text" name="password" type="password" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">email</label>
    <div class="col-8">
        <input value="@isset($user){{$user->email}}@endisset" id="text" name="email" type="text" class="form-control">
    </div>
</div>