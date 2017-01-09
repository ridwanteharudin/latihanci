<?php $this->load->view('home/core/header');
?>
        <h1>Selamat Datang</h1>
        <div class="table-responsive">          
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Hobi</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
            <?php $result=$this->db->query('SELECT * FROM member'); 
            if($result->num_rows()>0) 
            { 
            foreach($result->result_array()as $row) 
            { ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['hobby'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['agama'];?></td>
                    <td><a href="#">Update || </a><a href="#">Delete</a></td>
                </tr> 
            <?php
            } 
            }?>
              
            </tbody>
          </table>
          </div>
        <a href="<?php echo base_url('home/Logout');?>">Logout</a>
<?php $this->load->view('home/core/footer');?>