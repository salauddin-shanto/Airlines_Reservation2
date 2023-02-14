<?php
//getting value from javascript code under php
    $st= "
          <script>
            alert('Hellow World');
          </script>
      "; 
      echo $st;
?>
    <script>
        function f1(obj){
            var selected_in_js = obj.value;
            alert(selected_in_js);
        }
    </script