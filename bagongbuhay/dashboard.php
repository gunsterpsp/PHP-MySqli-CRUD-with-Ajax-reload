

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">Add user</button>
          <div class="row">
              <div class="col-md-12 mt-5">
                  <h1 class="text-center">ADD NEW RECORD</h1>
              </div>
          </div>
          <div class="row">
              <div class="col-md-5 mx-auto">
                 <hr style="height: 1px;">
                
              </div>
          </div>
      </div>
    
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Options</th>
            </tr>
        </thead>
    </table>


<!-- INSERT Modal -->
<div class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form id="form">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name"  placeholder="Enter your name">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email"  placeholder="Enter your email">
    </div>

    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="mobile" class="form-control" id="mobile"  placeholder="Enter your mobile">
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city"  placeholder="Enter your city">
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="addUser()">Save changes</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- INSERT Modal end -->



<!-- Update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

     
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="updatename"  placeholder="Enter your name">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="updateemail"  placeholder="Enter your email">
    </div>

    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" class="form-control" id="updatemobile"  placeholder="Enter your mobile">
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="updatecity"  placeholder="Enter your city">
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" onclick="UpdateDetails()" class="btn btn-dark">Update</button>
        <input type="hidden" id="hiddendata">
      </div>

      </div>
    </div>
  </div>
</div>


</body>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>