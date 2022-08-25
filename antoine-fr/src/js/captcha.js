function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('6LeimewfAAAAAAp6topFgctIhnHCA-2YiHfQrRMa', {action: 'submit'}).then(function(token) {
      });
    });
  }