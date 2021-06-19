

<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <form>
        <input type='radio' value='adrian' class='test' name='ts1'>
        <button type='button' onclick='ts()'>Click here</button>
    </form>
    <p class="broken"></p>
<script>
    function ts(){
         var value = $("input[name='ts1']:checked").val();
$.ajax({
     url: "test1.php",
  method: "POST",
  data: { text: value }
})
  .done(function( response ) {
    $("p.broken").html(response);
  });
    
    }
</script>
</body>
</html>