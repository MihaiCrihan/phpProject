


<div class="container mt-4">
    <form action="" method="post">
        <table>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td><input class="input" type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Pick Image</td>
                    <td><input class="input" type="file" name="img"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea class="input" name="description" ></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Select Type</td>
                    <td>
                        <select name="authors_name">
                          <? for ($i = 1; $i < 5; $i++){?>
                              <option value="" >
                                <?= $i?>
                              </option>
                          <?}?>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-dark mt-4 ml-4" type="submit" name="insert">Add Product</button>
    </form>
</div>

<style>
    .input {
        width: 350px;
    }
    td:first-child{
        padding-right: 60px;
    }
</style>