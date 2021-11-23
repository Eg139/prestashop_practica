<div class="panel">
    <div class="panel-heading">
    <i class="icon-gear"></i>&nbsp;{l s='Product List' mod='deadpool'}
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="icon-plus"></i>&nbsp;{l s='Add Hero' mod='deadpool'}
  </button>
    
    </div>
    <div class="panel-body">


    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Hero</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="row" action="heroAdd.php" method="post" enctype="multipart/form-data">

  <div class="input-group col-md-12">

      <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control"  id="name" name="name">
      </div>

      <div class="form-group col-md-6">
        <div class="input-group-prepend">
        <label class="input-group-text" for="sage">Options</label>
        </div>
        <select class="custom-select" id="sage" name="sage">
        <option selected>Choose...</option>
        <option value="dc">DC</option>
        <option value="marvel">Marvel</option>
        <option value="other">Othher</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="superpower">Superpower</label>
        <input type="text" class="form-control" id="superpower" name="superpower">
      </div>
      <div class="form-group col-md-6">
      <label for="al">Altura</label>
      <input type="text" class="form-control" id="alt" name="alt">
    </div>

    <div class="form-group col-md-8">
      <label for="perfil">Hero Image</label>
      <input type="file" name="hojaDeVida" class="form-control-file" id="perfil">
    </div>
  </div>

      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Add Hero</button>
      </div>
      
      </form>

      </div>

    </div>
  </div>
</div>