<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library</title>
    <link href="css/book.css" rel="stylesheet" type="text/css">
    <link href="../fontawesome_6/all.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="body_frame">
    <h2>Library</h2>
    <hr>
    <div class="create_button_layer" >
        <a href="create_library.html" class="button_create">
          <span>
            <i class="fa-solid fa-plus"></i>Create
          </span>
        </a>

    </div>
    <table>
        <caption>Store</caption>
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Short Name</th>
            <th scope="col">Publisher</th>
            <th scope="col">Owner</th>
            <th scope="col">Read Count</th>
            <th scope="col">Date Added</th>
            <th scope="col">Read</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Things Fall Apart</td>
            <td>TFA</td>
            <td>Ivan</td>
            <td>Chinewa Achebe</td>
            <td>0</td>
            <td>20/24/2025</td>
            <td><input type="checkbox"/></td>
            <td>
                <a class="button_update" href="#">
                <i class="fa-solid fa-pen-to-square edit_button icon_space"></i>
                </a>
                <a class="button_delete"href="#">
                    <i class="fa-solid fa-trash delete_button icon_space"></i>
                </a>
            </td>

        </tr>
        </tbody>

    </table>
</div>

</body>
</html>
