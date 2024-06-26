<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100" style="background-color: #508bfc;">
	  <div class="container py-5 h-100">
	    <div class="row d-flex justify-content-center align-items-center h-100">
	      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
	        <div class="card shadow-6-strong" style="border-radius: 1rem;">
	          <div class="card-body p-5 text-center">

	            <h3 class="mb-5 fw-bold text-secondary" style="font-family:tahoma">DSWD Portal</h3>
	            <form method="post" action="/login_auth">
	            	@csrf
		            <div data-mdb-input-init class="form-outline mb-4">
		            	<div class="form-label text-start fw-semibold" for="typeEmailX-2">Username</div>
		              <input placeholder="" type="text" name="username" id="typeEmailX-2" class="shadow rounded-0 form-control form-control-lg" />
		              
		            </div>

		            <div data-mdb-input-init class="form-outline mb-4">
		            <div class="form-label text-start fw-semibold" for="typePasswordX-2">Password</div>
		              <input placeholder="" type="password" name="password" id="typePasswordX-2" class="shadow rounded-0 form-control form-control-lg" />
		              
		            </div>
		            <button data-mdb-button-init data-mdb-ripple-init class="col-12 rounded-2 btn btn-primary btn-lg btn-block" type="submit">Login
		            </button>
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>