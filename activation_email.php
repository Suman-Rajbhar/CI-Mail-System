<div style="width: 600px; height: auto; border: 2px #444 solid; font-family: candara,vrinda; font-size: 14pt; color: #454545; background:#f9f9f9; padding: 8px;">
<div style="width:300px;  font-family: vrinda; font-size: 14pt; font-weight: bold; margin-bottom: 10px;">
    <img alt="eStore" src="http://gingerbd.com/myblog/site_content/img/logo.png">
</div>
<br>
<h4>Hello Dear <?php echo ' '.$user_name;?>,</h4>
<p style="text-align: center; background: #ffff00;">
    You are successfully Registered! Thank you to join in Incepta Forum.
</p>
<p>
<div style="color: #ff0044; text-decoration: underline;">
    Your Login Information:
</div>
    <strong>Email:</strong>&nbsp;&nbsp;<span><?php echo $to_address;?></span><br/>
    <strong>Company:</strong>&nbsp;&nbsp;<span><?php echo $company;?></span><br/>
    <strong>Phone:</strong>&nbsp;&nbsp;<span><?php echo $mobile;?></span><br/>
</p>
<p style="text-align: center;">
    <a href="<?php echo base_url()?>home/<?php echo $to_address;?>" target="_blank">
        >> Click to verify your Email authentication <<
    </a>
</p>
<p>
    Thank You
    <br/>
    <strong>Admin</strong><br/>
    <span>Incepta</span>
</p>

<br>
<div style="text-align: center; background: #289035; color: #fff; font-size: 15pt;">
    Your Product Show Case for Boost your Business! 
</div>
</div>