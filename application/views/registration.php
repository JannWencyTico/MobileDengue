<head>
    <title>Registration</title>
</head>
<div>
    <a href="http://localhost/Mobile/index.php/request">
        <button class="btn btn-success"> Request </button>
    </a>
    <hr>
</div>
<div id="body" align="center">
    <?php
        echo "<table class='table table-striped'>";
            $this->load->helper('form');
            echo form_open('registration/register');
                echo "<tr><td>Username</td><td>".form_input('username', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Password</td><td>".form_password('password', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Name</td><td>".form_input('name', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Mobile Number</td><td>".form_input('mobilenum', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Organization</td><td>".form_input('organization', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td align='right' colspan=2>".form_submit('mysubmit', 'Register', 'class="btn btn-primary"')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
    <br/>
</div>