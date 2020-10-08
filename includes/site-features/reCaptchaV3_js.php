<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LdhUuIUAAAAABAYxk96HOG1gkpRksHy6eM1IX8i', {action: 'homepage'}).then(function(token) {
		console.log(token);
       document.getElementById("g-token").value = token;
    });
});
</script>