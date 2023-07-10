// JavaScript to disable copy and paste for the re-enter password field -->
<script>
   document.getElementById("cpassword").addEventListener("paste", function(e) {
      e.preventDefault()
   });
</script>