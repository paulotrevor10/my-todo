<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Todo</title>
    <link rel="stylesheet" href="../output.css" >
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="data-container shadow p-5 rounded">
            <header class="text-center mb-4">
                <p class="font-bold text-3xl">My-<span class="data-title">ToDo</span></p>
            </header>
            <main>
                <div class="data-label text-center mb-3">
                    <span class="font-bold text-lg">Sign In</span>
                </div>
                <div class=" data-forms">
                    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
                      <!-- Email input -->
                    
                      
                      <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
                      </div>
                      
                      <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password">
                      </div>
                    
                   
                      <!-- 2 column grid layout for inline styling -->
                      <div class="row mb-4">
                        
                        <div class="text-start">
                          <a class="text-xs" href="#!">Forgot password?</a>
                        </div>
                      </div>
                    
                      <!-- Submit button -->
                      <button data-mdb-ripple-init type="submit" value="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
                      
                      <div class="text-center mt-5">
                        <p class="text-xs">Not a member? <a href="sign-up.php">Sign Up</a></p>
                      </div>
                      
                    </form>
                </div>
                
            </main>
            
        </div>
    </div>
    
    
    <script src="../js/sign-in.js"></script>
    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
    ></script>
</body>
</html>
