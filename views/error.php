
    <!DOCTYPE html>
    <html>
    	<head>
    		<meta charset="UTF-8">
    		<title>Error</title>
    		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
        	<link href="/css/bootstrap.min.css" rel="stylesheet">
        	<link href="/css/heroic-features.css" rel="stylesheet">
        	<link href="/css/estilos.css" rel="stylesheet">
        </head>
    	
    	<body>
    		<?php 
    		  (TEMPLATE)::header("Error");
    		?>  
    		
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-error-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Error en la operación</h1>
                    <p class=''><?=$mensaje?></p>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
    		
    		<?php 
    		  (TEMPLATE)::footer();
    		?>
    	</body>
    	
    </html>

