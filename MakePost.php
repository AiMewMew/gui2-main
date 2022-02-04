<header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>MAKE POST</h1>
                   
              
                    <div class="form-container">
                    <div class="form-group  text-danger h6">
                    <?php
          if (isset( $errors['error'])) {
          ?>
            <div class="alert alert-danger text-center p-2">
              <?php
                echo $errors['error'];
              ?>
            </div>
          <?php
          }if(isset( $success['success'])){
              ?>
          <div class="alert alert-success text-center p-2">
              <?php
                echo  $success['success'];
              ?>
            </div>
              <?php
          }
          ?>
                        <form method='post'>
                            
                            
                    
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="PostName" required>
                                <label class="label-control" for="postcontent">Post Name</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-input" name="PostDescription" required>
                                <label class="label-control" for="postcontent">Post Description</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-input" name="PostBody" required>
                                <label class="label-control" for="postcontent">Post Body</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                            <input type="submit" class="form-control-submit-button" value="POST COMMENT" name="PostComment" >
                
                            </div>
                            
                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->



   


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">All Rights Reserved. </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->