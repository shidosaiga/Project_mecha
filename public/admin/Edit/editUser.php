<?php
    include 'head.php';
?>





<div class="container">
        <h1 class="main-title">User</h1>
       
        
        <div class="row">
          <div class="col-lg-9">
          
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    
                    <th>Edit User</th>
                    <th></th>
                    
                  </tr>
                </thead>
                <tbody>
                <form action="" method="post" enctype="multipart/form-data">
                  <tr>
                      <td>
                        <label for="name">Name</label>
                      </td>
                     <td> 
                      <div class="form-group">
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                     </td>
                  </tr>

                  <tr>
                      <td>
                        <label for="description">Email</label>
                      </td>
                     <td> 
                      <div class="form-group">
                          <input type="text" class="form-control" name="email" id=eail" placeholder="Emai">
                      </div>
                     </td>
                  </tr>

                  <tr>
                      <td>
                        <label for="type">User Name</label>
                      </td>
                     <td> 
                      <div class="form-group">
                         <input type="text" class="form-control" name="username" id="username" placeholder="User Name" required>
                      </div>
                     </td>
                  </tr>

                  <tr>
                      <td>
                        <label for="type">Password</label>
                      </td>
                     <td> 
                      <div class="form-group">
                          <input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
                      </div>
                     </td>
                  </tr>
                  
                  <tr>
                      <td>
                        
                      </td>
                     <td> 
                     <button type="submit" name="submit" class="btn-1">Submit</button>
                     </td>
                  </tr>



                </form>
                 
                </tbody>
              </table>
            </div>
          </div>


          <!-- Chart library -->
<script src="../plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="../plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="../js/script.js"></script>
</body>

</html>