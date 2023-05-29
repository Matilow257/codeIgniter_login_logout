

<div class="container mt-3 ">

<div class="card mt-" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Welcom</h5>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <p class="card-text">
        <strong> Name: </strong> <?=session('user')['name']?>
        <br>
        <strong>E-mail: </strong> <?=session('user')['email']?>
    </p>
    <p>
        <a href="<?=site_url('login/do_logout')?>" class=" btn btn-danger  btn-md">Logout</a>
    </p>
  </div>
</div>

</div>