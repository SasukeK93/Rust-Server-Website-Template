<section class="section servers text-center" id="servers">
<div class="tabs">
  <div class="spoon is-medium is-primary">Servers Status</div>
</div>
<div class="row">
<!-- Server #1 START -->
<div class="col-md-6 srv">
<div class="one-server">
<div class="<?=$s1_status;?>">
<img src="<?=SITE_URL;?>img/loader.webp" data-src="<?=SITE_URL;?><?php echo $s1_img; ?>" class="lazy server-header img-fluid" alt="<?php echo $s1_name; ?>">
</div>
<h2><?php echo $s1_name; ?></h2>
<p><?php echo SERVER_1_DESC; ?></p>
<span class="players">Players: <?php echo $s1_cur; ?>/<?php echo $s1_max; ?></span>
<div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $s1_cur; ?>" aria-valuemin="0" aria-valuemax="<?php echo $s1_max; ?>"></div>
</div>
<?php echo $s1_connect_button; ?>&nbsp;<?php echo $s1_vote_button; ?>
</div>
</div>
<!-- Server #1 END -->
<!-- Server #2 START-->
<div class="col-md-6 srv">
<div class="one-server">
<div class="<?php echo $s2_status; ?>">
<img src="<?=SITE_URL;?>img/loader.webp" data-src="<?=SITE_URL;?><?php echo $s2_img; ?>" class="lazy server-header img-fluid" alt="<?php echo $s2_name; ?>">
</div>
<h2><?php echo $s2_name; ?></h2>
<p><?php echo SERVER_2_DESC; ?></p>
<span class="players">Players: <?php echo $s2_cur; ?>/<?php echo $s2_max; ?></span>
<div class="progress" style="height:3px;">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $s2_cur; ?>" aria-valuemin="0" aria-valuemax="<?php echo $s2_max; ?>"></div>
</div>
<?php echo $s2_connect_button; ?>&nbsp;<?php echo $s2_vote_button; ?>
</div>
</div>
<!-- Server #2 END -->
</div>
</section>

<!-- Server #1 Connect Modal Start -->
<div class="modal fade" id="ServerConnect1" tabindex="-1" role="dialog" aria-labelledby="ServerConnectmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" id="ServerConnect">
      <div class="modal-header" id="ServerConnect">
        <h5 class="modal-title" id="exampleModalLabel">Connect to Server</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <p>In order to connect <strong><?php echo $s1_name; ?></strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
  <p class="text-center"><a href="steam://connect/<?php echo $s1_ip; ?>:<?php echo $s1_port; ?>" role="button" class="btn btn-success"><i class="fab fa-steam-symbol"></i> Connect via Steam</a></p>
  <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
  <hr>
  <div class="form-group">
    <label for="consolecommand-1">Connect via Rust in-game console</label>
    <textarea class="form-control" id="consolecommand-1" rows="1">client.connect <?php echo $s1_ip; ?>:<?php echo $s1_port; ?></textarea>
  </div>
  <p>In order to connect via in-game console, while you in Rust main menu press <kbd>F1</kbd> and paste code above.</p>
      </div>
      <div class="modal-footer" id="contact"><button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Server #1 Connect Modal END -->

<!-- Server #2 Connect Modal Start -->
<div class="modal fade" id="ServerConnect2" tabindex="-1" role="dialog" aria-labelledby="ServerConnectmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" id="ServerConnect">
      <div class="modal-header" id="ServerConnect">
        <h5 class="modal-title" id="exampleModalLabel">Connect to Server</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <p>In order to connect <strong><?php echo $s2_name; ?></strong> server you can use direct Steam connection link, or copy console command and paste it in Rust console.</p>
  <p class="text-center"><a href="steam://connect/<?php echo $s2_ip; ?>:<?php echo $s2_port; ?>" role="button" class="btn btn-success"><i class="fab fa-steam-symbol"></i> Connect via Steam</a></p>
  <p>Once you press button above, Rust will be launched and try to connect server. This method doesn't work properly in some browsers.</p>
  <hr>
  <div class="form-group">
    <label for="consolecommand-2">Connect via Rust in-game console</label>
    <textarea class="form-control" id="consolecommand-2" rows="1">client.connect <?php echo $s2_ip; ?>:<?php echo $s2_port; ?></textarea>
  </div>
  <p>In order to connect via in-game console, while you in Rust main menu press <kbd>F1</kbd> and paste code above.</p>
      </div>
      <div class="modal-footer" id="contact"><button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Server #2 Connect Modal END -->