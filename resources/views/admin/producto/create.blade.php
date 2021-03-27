@extendes('template.index')
section('content')
    <form action="{route('producto.store')}" method="POST">
        <div class="row">
        <div class="col-md-4">
                <label>Producto</label>
                <input type="text" class="form control" name="name"/>
            </div>
            <div class="col-md-4">
                <label>Producto</label>
                <input type="text" class="form control" name="price"/>
            </div>
            <div class="col-md-4">
                <label>Producto</label>
                <input type="text" class="form control" name="state"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input type="submit" class="btn btn-success" value="Register">
            </div>
            </div class="col-md-1">
                <input type="button" class="btn btn-danger" value="Cancel">
            </div>
        </div>
            
              
    </form>
@endSection