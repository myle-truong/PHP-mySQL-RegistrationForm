<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="POST">
              <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="" required/>
              </div>
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="" required/>
              </div>
              <div class="form-group">
                <label for="gender" required>Gender</label>
                <div>
                  <label for="male" class="radio-in-line"><input type="radio" name="gender" id="male" value="m">Male</label>
                  <label for="female" class="radio-in-line"><input type="radio" name="gender" id="female" value="f">Female</label>
                  <label for="neutral" class="radio-in-line"><input type="radio" name="gender" id="neutral" value="x">Neutral</label>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="mail" class="form-control" name="email" id="email" value="" required >
              </div>
              <div class="form-group">
                <label for="email">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="" required >
              </div>
              <div class="form-group">
                <label for="number">Phonenumber</label>
                <input type="number" class="form-control" name="number" id="number" value="" required >
              </div>
              <input type="button" name="button" id="button" class="btn btn-primary"  value="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>