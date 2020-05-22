    <!-- Page Footer-->
    <footer class="main-footer">      
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>&copy; 2020. All rights reserved. Get on Focus</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ↓↓↓ firebase ↓↓↓ -->
    <script type="text/javascript">
    // Your web app's Firebase configuration
    var firebaseConfig = {
    apiKey: "AIzaSyC-nfj3B_vnFvhnjVspXncAD0_3RonYq-g",
    authDomain: "gofv1-e45e0.firebaseapp.com",
    databaseURL: "https://gofv1-e45e0.firebaseio.com",
    projectId: "gofv1-e45e0",
    storageBucket: "gofv1-e45e0.appspot.com",
    messagingSenderId: "378966108566",
    appId: "1:378966108566:web:bf3a30937d913472b5d5b7"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    const db = firebase.firestore();
    // db.settings({ timestampsInSnapshots: true });
  </script>
  <!-- ↑↑↑ firebase ↑↑↑ -->
  <!-- JavaScript files-->
  <script src="js/get-data.js"></script>
  <script src="js/app.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"> </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
  <script src="js/front.js"></script>
  <script type="text/javascript">
    ajax_get_json();
  </script>


  </body>
</html>



