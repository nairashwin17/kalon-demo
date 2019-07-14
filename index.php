<?php  include 'header.php'; ?>
    <div class="bglanding">
        <div class="centered-content">
            <img src="img/Kalon logo.png" alt="" class="landinglogo"/>
            <img src="img/logoname.png" alt="" class="logoname" />
            <p class="goldendesc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt </p>
            <button class="explore">Explore</button>
        </div>
    </div>
<?php  include 'footer.php'; ?>
    <script>
$(document).ready(function(){
    setInterval(function(){
        window.location.href = "home.php";
         }, 5000);
         $('.explore').click(function(){
            window.location.href = "home.php";
         });
});
</script>
