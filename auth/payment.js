const paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener("submit", payWithPaystack, false);


function payWithPaystack(e) {

  e.preventDefault();


  let handler = PaystackPop.setup({

    key: 'pk_test_9088abdf6ca77440d8ead7cf8bdaaeef88216c1e', // Replace with your public key

    email: document.getElementById("email-address").value,
    firstname: document.getElementById("first-name").value,
    lastname: document.getElementById("last-name").value,

    amount: document.getElementById("amount").value * 100,
    currency: 'NGN',

    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

    // label: "Optional string that replaces customer email"

    onClose: function(){
        alert('Transaction was not completed, Window Closed.');
    },

    callback: function(response){

      let message = 'Payment complete! Reference: ' + response.reference;
      window.location.href = "http://localhost/lms/pay/verify_transaction.php?token=" + response.reference;
    }

  });


  handler.openIframe();

}

