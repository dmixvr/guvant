<div class="form-group row">
    <label class="col-4 col-form-label" for="name">Nombre</label>
    <div class="col-8">
        <input id="name" name="name" type="text" class="form-control" required="required">
    </div>

</div>
<select id="SelectedMenu">
    @foreach ($menus as $menu)
        <option value="{{$menu->id}}">{{$menu->name}}</option>
    @endforeach
</select>

<button name="AddMenu" class="btn btn-primary btn-light">Añadir menu</button>
