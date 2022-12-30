<div class="container-fluid px-3" style="display: flex;justify-content: center;flex-wrap: wrap;">

  <div class="container mt-5" style="display: flex;justify-content: center;">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Tambah Barang
    </button>
  </div>

  <div class="row pt-5">

    <?php foreach ($data['barang'] as $barang): ?>

      <div class="card mx-3" style="width: 18rem;">
        <img src="<?php echo BASEURL ?>img/barang/<?php echo $barang['img'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $barang['nama'] ?></h5>
          <p class="card-text">$ <?php echo $barang['harga'] ?></p>
          <a href="<?php echo BASEURL ?>barang/detail/<?php echo $barang['id'] ?>" class="btn" style="background-color: #edebd7;width: 100%;">Buy Now</a>
        </div>
      </div>

    <?php endforeach ?>

  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
  
</script>