<div id="admin_header" class="wrapper">
    <h2><?=$selected;?></h2>
    <ul class="tabs">
        <li <?php if($selected == 'Settings') { echo 'class="selected"'; } ?>><a href="<?=$this->webroot; ?>admin">Settings</a></li>
        <li <?php if($selected == 'Flagged Posts') { echo 'class="selected"'; } ?>><a href="<?=$this->webroot; ?>admin/flagged">Flagged Posts</a></li>
        <li <?php if($selected == 'Users') { echo 'class="selected"'; } ?>><a href="<?=$this->webroot; ?>admin/users">Users</a></li>
        <li <?php if($selected == 'Blacklist') { echo 'class="selected"'; } ?>><a href="<?=$this->webroot; ?>admin/blacklist">Blacklist</a></li>
        <li <?php if($selected == 'Remote Settings') { echo 'class="selected"'; } ?>><a href="<?=$this->webroot; ?>admin/remote_settings">Remote Settings</a></li>
    </ul>
</div>
