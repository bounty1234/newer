<?php include 'includes/header.php';?>


      <span style="text-transform: capitalize; color: #203864"><?=$match->ph->user->fullname;?></span>! Thank you for Pledging Help!</td></tr></tbody></table>


    <div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;">
      <b style="color: #777777;">Your PH #<?=$match->ph->id;?> has been match to pay 
        <?=$match->ph->currency->html_code;?><?=$this->money_format($match->ph_amount);?> to 
      <?=$match->gh->user->fullname;?>. </b>
      <br>
      Please see dashboard for more details. 
      <br>
      <br>
       <a href="<?=domain;?>/login" style="color: #ffffff; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; padding: 9px 9px; font-size: 15px; line-height: 21px; background-color: #32c89a;">&nbsp; Go to Dashboard &nbsp;</a>
       <br>
       <br>
    </div>

  </td></tr></tbody></table>
</td></tr></tbody></table>
    






<?php include 'includes/footer.php';?>