<div class="jumbotron">
   
    <?php
        $attributes = array('id'=>'myform','method'=>'post');
        echo form_open('home/index',$attributes);
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
                'type' => 'password',
                'name' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Password'
            );
            echo form_input($data);
        ?>  
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
--> <?php echo $this->session->flashdata('salah');?>
    <div><?php echo validation_errors(); ?></div>
</div>