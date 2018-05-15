<li class="dropdown">

    <a class="dropdown-toggle menu-icon" id="Online" onclick="whatyouwantdo()" href="#">
        <i class="fa fa-user"> <?php echo $name; ?> </i>
    </a>
    
    <form action="../wl/index.php" name="index-wl" id="index-wl" method="post">
        <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
    </form>
    
    <form action="../wl/minhaconta.php" name="minhaconta" id="minhaconta" method="post">
        <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
    </form>
    
    <form action="../wl/alt_minhaconta.php" name="alt-minhaconta" id="alt-minhaconta" method="post">
        <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
    </form>
    
    <form action="../wl/redesociais.php" name="redesociais" id="redesociais" method="post">
        <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
    </form>
    
    <form action="../wl/add_sociamedia.php" name="add_sociamedia" id="add_sociamedia" method="post">
        <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
    </form>
    
    <form action="../wl/altrdsociais.php" name="altrdsociais" id="altrdsociais" method="post">
        <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
    </form>
                                
    <form action="../wl/logout.php" name="logout" id="logout" method="post">
        <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
    </form>

</li>