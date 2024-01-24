<?php
  require_once "includes/config_session.inc.php";
  require_once "includes/view/signup_view.inc.php";
?>

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
    
    <style>
      .form-error {
        color: red;
      }
    </style>

</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="data-container shadow p-5 rounded">
            <header class="text-center mb-4">
                <p class="font-bold text-3xl">My-<span class="data-title">ToDo</span></p>
            </header>
            <main>
                <div class="data-label text-center mb-3">
                    <span class="font-bold text-lg">Sign Up</span>
                </div>
                <div class="data-forms">
                    <form action="includes/signup.inc.php" method="post">
                      <!-- Email input -->
                      
                      <div class="input-group input-group-sm mb-2 ">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input id="username" type="text" class="form-control " placeholder="Username" name="username">
                      </div>
                    
                      <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input id="email" type="text" class="form-control" placeholder="Email" name="email">
                      </div>
                     
                      <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                      </div>
                   

                      <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input id="confirm-password" type="password" class="form-control" placeholder="Confirm Password" name="confirm-password">
                      </div>
                       <!-- Output Error -->
                       
                      
      
                      <!-- 2 column grid layout for inline styling -->
                      <div class="row mb-3">
                        
                        <div class="text-left mb-4">
                          <span class="text-xs italic">By signing up you agree to 
                            <span class="font-bold text-blue-500 cursor-pointer" data-mdb-modal-init data-mdb-target="#showModal">Privacy & Policy</span>.
                          </span>
                        </div>
                      </div>
                    
                      <!-- Submit button -->
                      <button data-mdb-ripple-init  class="btn btn-primary btn-sm btn-block" type="submit" value="submit">Submit</button>
                      <!-- End Submit button -->
                      <div class="text-xs"><?php check_signup_errors();?> </div>
                      
                  
                                 
                 
                      
                    </form>
                    <div class="text-center mt-5">
                        <p class="text-xs">Already a member? <a class="font-medium" href="sign-in.php">Sign In</a></p>
                      </div>
                </div>
                
                <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Privacy & Policy</h5>
                          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam modi nihil sed quasi incidunt quod inventore consequatur, blanditiis recusandae corporis libero laboriosam quas non labore explicabo. Quos architecto laudantium voluptas eveniet unde tenetur exercitationem animi ducimus est nesciunt repudiandae culpa distinctio beatae recusandae placeat tempore in ut numquam, eum officiis maxime, iste impedit ad! Maiores ea iure tempora eius deserunt praesentium, aspernatur, libero quia ratione voluptatum rem earum aperiam facilis ipsum optio vitae possimus quidem explicabo repellendus, nulla repudiandae? Eveniet ipsum in labore voluptatum quod ratione. Consequuntur, harum ut labore vitae fugiat et libero dolores modi laborum numquam molestias omnis possimus doloribus distinctio minima perspiciatis? Autem rerum minima ratione excepturi a provident, porro ipsa inventore numquam, et earum. Alias ipsam, mollitia quod enim doloribus inventore laborum minima voluptas cum obcaecati neque deleniti, rem itaque aliquam! Ipsam quis nam a dolor autem quidem tempore iste commodi magnam sit ipsum nihil quam quibusdam suscipit exercitationem, illum delectus itaque, incidunt et vel voluptatibus maxime distinctio vitae magni. Aperiam nihil, amet deleniti numquam harum tempora sit necessitatibus adipisci excepturi nulla inventore dicta quia ab, minima libero placeat magni voluptas quas natus eum odio non? Alias eum blanditiis, nisi perferendis reiciendis minima dolore aut. Sapiente doloribus suscipit, neque at eum error harum quo! Et ipsam voluptates sit placeat, ducimus id sapiente possimus natus architecto pariatur doloribus quae fugit voluptate alias dolore iure nostrum distinctio? Laboriosam, accusamus enim omnis officia, soluta at sapiente eius adipisci molestiae aut praesentium iusto voluptatem error atque minima! Consectetur doloremque accusamus fuga ad quo eligendi vitae molestiae officia quaerat dignissimos optio quas deleniti, necessitatibus odio? Vitae adipisci recusandae a sequi libero vel id quasi aliquam expedita reiciendis magnam doloribus cumque veniam, voluptas modi debitis sint iste culpa labore, accusamus rem. Modi, ducimus voluptatem sequi earum commodi id ut ad nisi tempora.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-mdb-ripple-init data-mdb-dismiss="modal">I Agree</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                 
            </main>
              
        </div>
    </div>

    <script src="../js/sign-up.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
</html>
