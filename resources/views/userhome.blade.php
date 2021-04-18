<!DOCTYPE html>
<html>
<head>
<title>User home</title>
<link rel="stylesheet" type="text/css"  media="all">
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/style.css')}}">
</head>
<style>

</style>
 
<body>
  
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
     
            <a class="navbar-brand" href="userview">View Data</a>
            <a class="navbar-brand" href={{ "updateuser/".session('LoggedUser')}}>Update Profile</a>
            <a class="navbar-brand" href="login">Logout</a>      
      </div>
    </nav>
    <!---nav end--->
   
  <div class="jumbotron text-center">
    <h1>User Home</h1>
  </div>
              <h2>"Welcome to our site"</h2>
            </form>
        </div>
    </div>
  </div>
  
</body>

</html>