<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit the Profile</title>
  </head>
  <body>
     <div class='container'>
       <h1>Edit the Profile</h1>
       <form action='' method='post'>
        <div class='form-group'>
             <label>First Name: <input type='text' name='first_name' value='<?=$data->first_name ?>' class='form-control' /></label>
             <label>Last Name: <input type='text' name='last_name' value='<?=$data->last_name ?>' class='form-control' /></label>
             <label>Email: <input type='text' name='email' value='<?=$data->email ?>' class='form-control' /></label>
             <label>Phone Number: <input type='text' name='phone_number' value='<?=$data->phone_number ?>' class='form-control' /></label>
             <label>Theme ID: <input type='text' name='theme_id' value='<?=$data->theme_id ?>' class='form-control' /></label>
             <label>Gender: <input type='text' name='gender' value='<?=$data->gender ?>' class='form-control' /></label>
             <label>Location: <input type='text' name='location' value='<?=$data->location ?>' class='form-control' /></label>
             <label>User Type: <input type='text' name='user_type' value='<?=$data->user_type ?>' class='form-control' /></label>
           </div>
             <input type='submit' name='action' value='Save Changes' class='btn btn-success' />
             <a href='/home/index' class='btn btn-secondary'>Cancel</a>
        </form>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>