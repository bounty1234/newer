<?php include 'includes/header.php';?>


      <span style="text-transform: capitalize; color: #203864"><?=$match->gh->user->fullname;?></span>! Thank you for Requesting Help!</td></tr></tbody></table>


    <div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;">
      <b style="color: #777777;">Your GH #<?=$match->gh->id;?> has been match to receive 
        <?=$match->gh->currency->html_code;?><?=$this->money_format($match->gh_amount);?> to 
      <?=$match->ph->user->fullname;?>. </b>
      <br>
      Please see dashboard for more details. 
      <br>
      <br>
       <a href="<?=domain;?>/user/gh_matches/<?=$match->gh->id;?>" style="color: #ffffff; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; padding: 9px 9px; font-size: 15px; line-height: 21px; background-color: tomato;">&nbsp; Go to Dashboard &nbsp;</a>
       <br>
       <br>
    </div>

  </td></tr></tbody></table>
</td></tr></tbody></table>
    






<?php include 'includes/footer.php';?>