</div>
</main>
<!-- Main layout -->

<!-- Footer -->
<footer class="page-footer pt-0 mt-5">

  <!-- Copyright -->
  <div class="footer-copyright py-3 text-center">
    <div class="container-fluid">
      
      Anguarj and Mohanraj 

    </div>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>


<!-- Copy Paste Link  -->
<script src="../mdb/clipboard.min.js"></script>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<!-- SCRIPTS -->
<!-- JQuery -->
<script src="../mdb/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../mdb/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../mdb/js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../mdb/js/mdb.min.js"></script>
<!--Custom scripts-->

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"></script>

<script>
  // SideNav Initialization
  $(".button-collapse").sideNav();

  var container = document.querySelector('.custom-scrollbar');
  var ps = new PerfectScrollbar(container, {
    wheelSpeed: 2,
    wheelPropagation: true,
    minScrollbarLength: 20
  });
</script>


<!-- 3. Instantiate clipboard -->
<script>
  var clipboard = new ClipboardJS('#copyexample1', {
    target: function () {
      return document.querySelector('#copyeg1');
    },
  });
  var clipboard = new ClipboardJS('#copyexample2', {
    target: function () {
      return document.querySelector('#copyeg2');
    },
  });
</script>


</html>
