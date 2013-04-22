<div style="width:235px;margin:200px auto auto;border-radius:5px;padding:10px;background-color:#e5e5e5">
    <h1>Log Me In</h1>
    <?php echo form_open('auth/login'); ?>
        <p>
            <?php
                echo form_label('Username', 'username');
                echo form_input('username', '', 'id="username"');
            ?>   
        </p    
        <p>
            <?php
                echo form_label('Password', 'password');
                echo form_password('password', set_value('email_address'),'id="password"');
            ?>   
        </p
        <p>
            <?php echo form_submit('submit', 'Login'); ?>
        </p>    
    
    <?php echo form_close(); ?>

    <div class="errors"> <?php echo validation_errors(); ?> </div>
</div>