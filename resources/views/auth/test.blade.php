@extends('layouts.landingPageLayout.app')
@section('title', 'حساب جديد')
@section('content')
<style>
    .form-row {
    width: 70%;
    float: left;
    background-color: #ededed;
}
#card-element {
background-color: transparent;
height: 40px;
border-radius: 4px;
border: 1px solid transparent;
box-shadow: 0 1px 3px 0 #e6ebf1;
-webkit-transition: box-shadow 150ms ease;
transition: box-shadow 150ms ease;
}

#card-element--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

#card-element--invalid {
  border-color: #fa755a;
}

#card-element--webkit-autofill {
  background-color: #fefde5 !important;
}

#submitbutton,#tap-btn{
align-items:flex-start;
background-attachment:scroll;background-clip:border-box;
background-color:rgb(50, 50, 93);background-image:none;
background-origin:padding-box;
background-position-x:0%;
background-position-y:0%;
background-size:auto;
border-bottom-color:rgb(255, 255, 255);
border-bottom-left-radius:4px;
border-bottom-right-radius:4px;border-bottom-style:none;
border-bottom-width:0px;border-image-outset:0px;
border-image-repeat:stretch;border-image-slice:100%;
border-image-source:none;border-image-width:1;
border-left-color:rgb(255, 255, 255);
border-left-style:none;
border-left-width:0px;
border-right-color:rgb(255, 255, 255);
border-right-style:none;
border-right-width:0px;
border-top-color:rgb(255, 255, 255);
border-top-left-radius:4px;
border-top-right-radius:4px;
border-top-style:none;
border-top-width:0px;
box-shadow:rgba(50, 50, 93, 0.11) 0px 4px 6px 0px, rgba(0, 0, 0, 0.08) 0px 1px 3px 0px;
box-sizing:border-box;color:rgb(255, 255, 255);
cursor:pointer;
display:block;
float:left;
font-family:"Helvetica Neue", Helvetica, sans-serif;
font-size:15px;
font-stretch:100%;
font-style:normal;
font-variant-caps:normal;
font-variant-east-asian:normal;
font-variant-ligatures:normal;
font-variant-numeric:normal;
font-weight:600;
height:35px;
letter-spacing:0.375px;
line-height:35px;
margin-bottom:0px;
margin-left:12px;
margin-right:0px;
margin-top:28px;
outline-color:rgb(255, 255, 255);
outline-style:none;
outline-width:0px;
overflow-x:visible;
overflow-y:visible;
padding-bottom:0px;
padding-left:14px;
padding-right:14px;
padding-top:0px;
text-align:center;
text-decoration-color:rgb(255, 255, 255);
text-decoration-line:none;
text-decoration-style:solid;
text-indent:0px;
text-rendering:auto;
text-shadow:none;
text-size-adjust:100%;
text-transform:none;
transition-delay:0s;
transition-duration:0.15s;
transition-property:all;
transition-timing-function:ease;
white-space:nowrap;
width:150.781px;
word-spacing:0px;
writing-mode:horizontal-tb;
-webkit-appearance:none;
-webkit-font-smoothing:antialiased;
-webkit-tap-highlight-color:rgba(0, 0, 0, 0);
-webkit-border-image:none;

}
</style>


    <section class="w-screen h-screen flex flex-col md:flex-row" id="login">
        <div class="w-full md:w-1/2  h-full flex items-center justify-center bg-white">
            <div class="flex flex-col  justify-center items-center w-full md:max-w-[516px] px-4 gap-8">
                <div class="w-48 h-32">
                    <img src="{{ asset('assets/attachment/logo/logo.png') }}" class="w-full h-full" alt="logo">
                </div>
                <form class="w-full" id="form-container" method="post" action="/charge">
                    <!-- Tap element will be here -->
                    <div id="element-container"></div>
                    <div id="error-handler" role="alert"></div>
                    <div id="success" style=" display: none;;position: relative;float: left;">
                          Success! Your token is <span id="token"></span>
                    </div>
                    <!-- Tap pay button -->
                    <button id="tap-btn">Submit</button>
                  </form>
            </div>
        </div>
        <div class="hidden md:block w-full md:w-1/2 h-full relative">
            <img src="{{ asset('assets/attachment/Auth/Auth.jpg') }}" alt="hero" class="w-full h-full object-cover">
        </div>
    </section>
@endsection

@section('js')

<script>

    //pass your public key from tap's dashboard
var tap = Tapjsli('pk_test_EtHFV4BuPQokJT6jiROls87Y');

var elements = tap.elements({});

var style = {
  base: {
    color: '#535353',
    lineHeight: '18px',
    fontFamily: 'sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: 'rgba(0, 0, 0, 0.26)',
      fontSize:'15px'
    }
  },
  invalid: {
    color: 'red'
  }
};
// input labels/placeholders
var labels = {
    cardNumber:"Card Number",
    expirationDate:"MM/YY",
    cvv:"CVV",
    cardHolder:"Card Holder Name"
  };
//payment options
var paymentOptions = {
  currencyCode:["KWD","USD","SAR"], //change the currency array as per your requirement
  labels : labels,
  TextDirection:'ltr', //only two values valid (rtl, ltr)
  paymentAllowed: ['VISA', 'MASTERCARD', 'AMERICAN_EXPRESS', 'MADA'] //default string 'all' to show all payment methods enabled on your account
}
//create element, pass style and payment options
var card = elements.create('card', {style: style},paymentOptions);
//mount element
card.mount('#element-container');
//card change event listener
card.addEventListener('change', function(event) {
  if(event.loaded){ //If ‘true’, js library is loaded
    console.log("UI loaded :"+event.loaded);
    console.log("current currency is :"+card.getCurrency())
  }
  var displayError = document.getElementById('error-handler');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
</script>

@endsection
