<div class="jumbotron">
   
    <?php
        $attributes = array('id'=>'myform','method'=>'post');
        echo form_open('home/daftar',$attributes);
    ?>
    <div class="form-group">
        <?php
            $data = array(
                'type' => 'text',
                'name' => 'username',
                'class' => 'form-control',
                'placeholder' => 'Username'
            );
            echo form_input($data);
        ?>
    </div>
     <div class="form-group">
        <?php
            $data = array(
                'type' => 'email',
                'name' => 'email',
                'class' => 'form-control',
                'placeholder' => 'Email'
            );
            echo form_input($data);
        ?>
    </div>
    <div class="form-group">
        <?php
            $data = array(
                'type' => 'password',
                'name' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Password'
            );
            echo form_input($data);
        ?>  
    </div>
     <div class="form-group">
        <?php
            $data = array(
                'type' => 'password',
                'name' => 'konfirmasi',
                'class' => 'form-control',
                'placeholder' => 'Konfirmasi Password'
                
            );
            echo form_input($data);
        ?>
    </div>
    <div class="row">
		<div class="col-md-4">
            <div class="form-group">
                <input type="radio" name="gender" value="pria"/>Pria<br>
                <input type="radio" name="gender" value="wanita"/>Wanita<br>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="checkbox" name="hobby[]" value="Baca"/>Membaca<br>
                <input type="checkbox" name="hobby[]" value="Mancing"/>Memancing<br>
                <input type="checkbox" name="hobby[]" value="Bola"/>Bola<br>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
        </div>
    </div>
    <?php
        $data = array(
            'type' => 'submit',
            'name' => 'submit',
            'class' => 'btn btn-primary',
            'value' => 'DAFTAR'
        );
        echo form_submit($data);
        echo form_close();
    ?>
    
    
<!--
    <form method="get" action="#">
      <div class="form-group">
        <label for="email">Username</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" name="password">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
--> <?php echo $this->session->flashdata('no_login');?>
    <?php echo $this->session->flashdata('salah');?>
    <div><?php echo validation_errors(); ?></div>
</div>