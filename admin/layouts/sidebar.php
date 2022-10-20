<div class="sidebar" data-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
 <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
 <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">
   CT
  </a>
  <a href="http://www.creative-tim.com" class="simple-text logo-normal">
   Creative Tim
  </a>
 </div>
 <div class="sidebar-wrapper">
  <div class="user">
   <div class="photo">
    <?php 
          // display profile image
          $id = $user_id;
          $profile_img = get_profile_img($id);
          ?>
    <img src="../actions/photos/<?= $profile_img['profile_img']; ?>" />
   </div>
   <div class="user-info">
    <a data-toggle="collapse" href="#collapseExample" class="username">
     <span>
      <?= $auth; ?>
      <b class="caret"></b>
     </span>
    </a>
    <div class="collapse" id="collapseExample">
     <ul class="nav">
      <?php 
      if(isset($_SESSION['role_value'])) : 
      ?>
      <?php if($_SESSION['role_value'] == '1') : ?>
      <li class="nav-item">
       <a class="nav-link" href="admin_profile.php">
        <span class="sidebar-mini"> AMP </span>
        <span class="sidebar-normal"> Admin Profile </span>
       </a>
      </li>
      <?php elseif($_SESSION['role_value'] == '2') : ?>
      <li class="nav-item">
       <a class="nav-link" href="user_profile.php">
        <span class="sidebar-mini"> UP </span>
        <span class="sidebar-normal"> User Profile </span>
       </a>
      </li>
      <?php endif; ?>
      <?php endif; ?>
      <li class="nav-item">
       <a class="nav-link" href="#">
        <span class="sidebar-mini"> S </span>
        <span class="sidebar-normal"> Settings </span>
       </a>
      </li>
     </ul>
    </div>
   </div>
  </div>
  <ul class="nav">
   <li class="nav-item active ">
    <a class="nav-link" href="../../index.php">
     <i class="material-icons">dashboard</i>
     <p> Back To User </p>
    </a>
   </li>
   <li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
     <i class="material-icons">image</i>
     <p> UserManagement
      <b class="caret"></b>
     </p>
    </a>
    <div class="collapse" id="pagesExamples">
     <ul class="nav">
      <?php 
      if(isset($_SESSION['role_value'])) : 
      ?>
      <?php if($_SESSION['role_value'] == '1') : ?>
      <li class="nav-item ">
       <a class="nav-link" href="admin_index.php">
        <span class="sidebar-mini"> AL </span>
        <span class="sidebar-normal"> Admin List </span>
       </a>
      </li>
      <?php endif; ?>
      <?php endif; ?>
      <?php 
      if(isset($_SESSION['role_value'])) :
            if($_SESSION['role_value'] == '1') :
      ?>
      <li class="nav-item ">
       <a class="nav-link" href="user_index.php">
        <span class="sidebar-mini"> UL </span>
        <span class="sidebar-normal"> User List </span>
       </a>
      </li>
      <?php endif; ?>
      <?php endif; ?>

      <li class="nav-item ">
       <a class="nav-link" href="../examples/pages/rtl.html">
        <span class="sidebar-mini"> RS </span>
        <span class="sidebar-normal"> RTL Support </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/pages/timeline.html">
        <span class="sidebar-mini"> T </span>
        <span class="sidebar-normal"> Timeline </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/pages/login.html">
        <span class="sidebar-mini"> LP </span>
        <span class="sidebar-normal"> Login Page </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/pages/register.html">
        <span class="sidebar-mini"> RP </span>
        <span class="sidebar-normal"> Register Page </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/pages/lock.html">
        <span class="sidebar-mini"> LSP </span>
        <span class="sidebar-normal"> Lock Screen Page </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/pages/user.html">
        <span class="sidebar-mini"> UP </span>
        <span class="sidebar-normal"> User Profile </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/pages/error.html">
        <span class="sidebar-mini"> E </span>
        <span class="sidebar-normal"> Error Page </span>
       </a>
      </li>
     </ul>
    </div>
   </li>
   <li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
     <i class="material-icons">apps</i>
     <p> Post Management
      <b class="caret"></b>
     </p>
    </a>
    <div class="collapse" id="componentsExamples">
     <ul class="nav">
      <li class="nav-item ">
       <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
        <span class="sidebar-mini"> P || C </span>
        <span class="sidebar-normal"> Post || Category
         <b class="caret"></b>
        </span>
       </a>
       <div class="collapse" id="componentsCollapse">
        <ul class="nav">
         <?php
            if(isset($_SESSION['role_value'])) :
                if($_SESSION['role_value'] == '1') :
            ?>
         <li class="nav-item ">
          <a class="nav-link" href="category_index.php">
           <span class="sidebar-mini"> P C </span>
           <span class="sidebar-normal"> Post Category </span>
          </a>
         </li>
         <li class="nav-item ">
          <a class="nav-link" href="post_index.php">
           <span class="sidebar-mini"> P </span>
           <span class="sidebar-normal"> Posts </span>
          </a>
         </li>
         <?php endif; ?>
         <?php endif; ?>
        </ul>
       </div>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/components/buttons.html">
        <span class="sidebar-mini"> B </span>
        <span class="sidebar-normal"> Buttons </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/components/grid.html">
        <span class="sidebar-mini"> GS </span>
        <span class="sidebar-normal"> Grid System </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/components/panels.html">
        <span class="sidebar-mini"> P </span>
        <span class="sidebar-normal"> Panels </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/components/sweet-alert.html">
        <span class="sidebar-mini"> SA </span>
        <span class="sidebar-normal"> Sweet Alert </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/components/notifications.html">
        <span class="sidebar-mini"> N </span>
        <span class="sidebar-normal"> Notifications </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/components/icons.html">
        <span class="sidebar-mini"> I </span>
        <span class="sidebar-normal"> Icons </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/components/typography.html">
        <span class="sidebar-mini"> T </span>
        <span class="sidebar-normal"> Typography </span>
       </a>
      </li>
     </ul>
    </div>
   </li>
   <li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#formsExamples">
     <i class="material-icons">content_paste</i>
     <p> Forms
      <b class="caret"></b>
     </p>
    </a>
    <div class="collapse" id="formsExamples">
     <ul class="nav">
      <li class="nav-item ">
       <a class="nav-link" href="../examples/forms/regular.html">
        <span class="sidebar-mini"> RF </span>
        <span class="sidebar-normal"> Regular Forms </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/forms/extended.html">
        <span class="sidebar-mini"> EF </span>
        <span class="sidebar-normal"> Extended Forms </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/forms/validation.html">
        <span class="sidebar-mini"> VF </span>
        <span class="sidebar-normal"> Validation Forms </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/forms/wizard.html">
        <span class="sidebar-mini"> W </span>
        <span class="sidebar-normal"> Wizard </span>
       </a>
      </li>
     </ul>
    </div>
   </li>
   <li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
     <i class="material-icons">grid_on</i>
     <p> Tables
      <b class="caret"></b>
     </p>
    </a>
    <div class="collapse" id="tablesExamples">
     <ul class="nav">
      <li class="nav-item ">
       <a class="nav-link" href="../examples/tables/regular.html">
        <span class="sidebar-mini"> RT </span>
        <span class="sidebar-normal"> Regular Tables </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/tables/extended.html">
        <span class="sidebar-mini"> ET </span>
        <span class="sidebar-normal"> Extended Tables </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/tables/datatables.net.html">
        <span class="sidebar-mini"> DT </span>
        <span class="sidebar-normal"> DataTables.net </span>
       </a>
      </li>
     </ul>
    </div>
   </li>
   <li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
     <i class="material-icons">place</i>
     <p> Maps
      <b class="caret"></b>
     </p>
    </a>
    <div class="collapse" id="mapsExamples">
     <ul class="nav">
      <li class="nav-item ">
       <a class="nav-link" href="../examples/maps/google.html">
        <span class="sidebar-mini"> GM </span>
        <span class="sidebar-normal"> Google Maps </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/maps/fullscreen.html">
        <span class="sidebar-mini"> FSM </span>
        <span class="sidebar-normal"> Full Screen Map </span>
       </a>
      </li>
      <li class="nav-item ">
       <a class="nav-link" href="../examples/maps/vector.html">
        <span class="sidebar-mini"> VM </span>
        <span class="sidebar-normal"> Vector Map </span>
       </a>
      </li>
     </ul>
    </div>
   </li>
   <li class="nav-item ">
    <a class="nav-link" href="../examples/widgets.html">
     <i class="material-icons">widgets</i>
     <p> Widgets </p>
    </a>
   </li>
   <li class="nav-item ">
    <a class="nav-link" href="../examples/charts.html">
     <i class="material-icons">timeline</i>
     <p> Charts </p>
    </a>
   </li>
   <li class="nav-item ">
    <a class="nav-link" href="../examples/calendar.html">
     <i class="material-icons">date_range</i>
     <p> Calendar </p>
    </a>
   </li>
  </ul>
 </div>
</div>