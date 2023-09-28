<!DOCTYPE html>
<html lang="en">

<?php Session::loadPage('_head') ?>

<body class="dark">

    <?php

        if (Session::$isError) {
            Session::loadPage('_error');
        } else {
            Session::loadPage(Session::currentScript());
        }

    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
	<script src="<?=getConfig('root_path')?>assets/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?=getConfig('root_path')?>assets/dist/js/jquery-3.6.3.min.js"></script>

	<script src="../js/discuss.js"></script>
	
	<script>
		// Initialize the agent at application startup.
		const fpPromise = import('https://openfpcdn.io/fingerprintjs/v3')
			.then(FingerprintJS => FingerprintJS.load())

		// Get the visitor identifier when you need it.
		fpPromise
			.then(fp => fp.get())
			.then(result => {
				// This is the visitor identifier:
				const visitorId = result.visitorId

				// set a cookie 
				setCookie('fingerprint', visitorId, 1);
			})

        // Function to set a cookie
        function setCookie(name, value, daysToExpire) {
            var expires = "";
            
            if (daysToExpire) {
            var date = new Date();
            date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
            }
        
            document.cookie = name + "=" + value + expires + "; path=/";
        }
	</script>

</body>
</html>