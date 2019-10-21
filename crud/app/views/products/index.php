<div class="container grid">
  <? foreach ($data as $item) {?>
      <!--    --><?//=$item['img']?>
      <div class="card" >
          <h5 class="card-title text-center mt-2"><?=$item['type']?></h5>
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title text-center"><?=$item['name']?></h5>
              <p class="card-text"><?=$item['description']?></p>
              <h6 class="text-right"><?=$item['price']?> $</h6>
<!--              <a href="#" class="btn btn-danger">Buy</a>-->
                <? if(User::getInstance()->isAuthorised()){?>
                    <td><a href="cart/add/<?=$item['id']?>" class="btn btn-danger">Buy</a></td>
                <? }?>
          </div>
      </div>
  <?}?>
</div>

<style>
    .grid {
        margin-top: 100px;
        display: grid;
        grid-template-columns: repeat(3 , 1fr);
        grid-gap: 50px
    }
</style>