<?php 
class menus{
    public function main_menu(){
?>
        <div class="topnav">
        <?php 
        $obj = new Fnc();
        print '<a href="./">Welcome ' . $obj->computer_user("Sharlet") . '</a>';
        ?>    
        <a href="./">Home</a>
        <a href="./">About </a>
        <a href="./">Our Projects</a>
        <a href="./">Our Portforlio</a>
        <a href="./">Blog</a>
        <a href="./">Contact Us</a>
        </div>
<?php        
    }
}
