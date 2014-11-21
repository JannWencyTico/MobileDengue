<div id="body" align="center">
    <?php
    $months = array(    
                    '1'  => 'Jan',
                    '2'  => 'Feb',
                    '3'  => 'Mar',
                    '4'  => 'Apr',
                    '5'  => 'May',
                    '6'  => 'Jun',
                    '7'  => 'Jul',
                    '8'  => 'Aug',
                    '9'  => 'Sep',
                    '10' => 'Oct',
                    '11' => 'Nov',
                    '12' => 'Dec',
                    );
    for ($x=1; $x<=31; $x++)
    {
        $days[$x] = $x;
    }
    for ($x=date('o'); $x>=1940; $x--)
    {
        $year[$x] = $x;
    }
        echo "<table class='table table-striped'>";
            $this->load->helper('form');
            echo form_open('registration/register');
                echo "<tr><td>Last Name</td><td>".form_input('lastname', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>First Name</td><td>".form_input('firstname', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Middle Name</td><td>".form_input('middlename', NULL, 'class="form-control input-sm"')."</td></tr>";;
                echo "<tr><td>Birthday</td><td>".form_dropdown('month',$months, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('day',$days, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('year',$year, NULL, 'class="span1" class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Organization</td><td>".form_input('org', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Username</td><td>".form_input('username', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Password</td><td>".form_password('password', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td align='right' colspan=2>".form_submit('mysubmit', 'Register', 'class="btn btn-primary"')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
    <br/>
</div>