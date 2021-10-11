</div>
<!--end of sidebar div wrapper, all pages content should inside this div-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>




<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <script src="js/libs/jquery.js"></script> -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>


  $('.dropdown-menu').click(function (e) {
    e.stopPropagation();
  });


  var path = window.location.href;


  $('.main-ul-ls a').each(function () {
    if (this.href === path) {
      $(this).addClass('bg-custom-ls-active');
    }
  });

  $('#menu-action').click(function () {
    $('.sidebar').toggleClass('active');
    $('.main').toggleClass('active');
    $(this).toggleClass('active');

    if ($('.sidebar').hasClass('active')) {
      $(this).find('i').addClass('fa-close');
      $(this).find('i').removeClass('fa-bars');
    } else {
      $(this).find('i').addClass('fa-bars');
      $(this).find('i').removeClass('fa-close');
    }
  });

  // Add hover feedback on menu
  $('.sidebar').hover(function () {
    $('.sidebar').toggleClass('hovered');
  });

  $(document).ready(function () {
    $("#sidebarCollapse").on("click", function () {
      $("#sidebar").toggleClass("active");
    });
  });


</script>