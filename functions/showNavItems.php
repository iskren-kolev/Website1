<?php
function showNavItems($pagesArray, $pageTitle){
    foreach($pagesArray as $name => $url) {
        ?>
        <a href="<?php echo $url?>" <?php if($name==$pageTitle) {
            ?> id="active"<?php
        }?>><?php echo $name?></a>
        <?php
    }
}
?>

