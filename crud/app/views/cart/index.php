<div class="container">
    <div class="text-center mt-4 mb-4">Welcome to Our Store</div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($data as $item) {?>
            <tr>
                <td><?=$item['id']?></td>
                <td><?print_r($item)?></td>
                <td></td>
                <td></td>
                <td></td>

              <? if(User::getInstance()->isAuthorised()){?>
                  <td><a href="cart/remove/<?=$item['id']?>" class="btn btn-danger" style="border-radius: 50px; width: 40px;  height: 40px">X</a></td>
              <? }?>
            </tr>
        <?}?>
        </tbody>
    </table>

</div>