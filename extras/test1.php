
<style>
  @import url(http://fonts.googleapis.com/css?family=Roboto:400,100,900);

//colors
$red: #E1332D;
$white: #fff;

//base styles

* {
  box-sizing: inherit;
  transition-property: all;
  transition-duration: .6s;
  transition-timing-function: ease;
}

html,
body {
  box-sizing: border-box;
  height: 100%;
  width: 100%;
}

body {
  background: $red;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}

.buttons {
  display: table;
  height: 100%;
  width: 100%;
}

.container { 
  display: table-cell;
  padding: 1em;
  text-align: center; 
  vertical-align: middle;
}

h1 {
  color: $white;
  font-size: 1.25em;
  font-weight: 900;
  margin: 0 0 2em;
  
  @media (min-width: 450px) {
    font-size: 1.75em;
  }
  
  @media (min-width: 760px) {
    font-size: 3.25em;
  }
  
  @media (min-width: 900px) {
    font-size: 5.25em;
    margin: 0 0 1em;
  }
}

p {
  color: $white;
  font-size: 12px;
  
  @media(min-width: 600px) {
    left: 50%;
    position: absolute; 
    transform: translate(-50%, 0);
    top: 90%;
  }
  
  @media(max-height: 500px) {
    left: 0;
    position: relative;
    top: 0;
    transform: translate(0, 0);
  }
  
  a {
    background: rgba($white, 0);
    border-bottom: 1px solid;
    color: $white;
    line-height: 1.4;
    padding: .25em;
    text-decoration: none;
    
    &:hover {
      background: rgba($white, 1);
      color: $red;
    }
  }
}
//button styles


//default button
.btn {
  color: #fff;
  cursor: pointer;
  display: block;
  font-size:16px;
  font-weight: 400;
  line-height: 45px;
  margin: 0 auto 2em;
  max-width: 160px; 
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  vertical-align: middle;
  width: 100%; 
  
  @media(min-width: 400px) {
    display: inline-block;
    margin-right: 2.5em;
  
    &:nth-of-type(even) {
      margin-right: 0;
    }
  }
  
  @media(min-width: 600px) {
  
    &:nth-of-type(even) {
      margin-right: 2.5em;
    }
    
    &:nth-of-type(5) {
      margin-right: 0;
    }
    
  }
  
  &:hover { text-decoration: none; }
  
}

/////////////////////////////////
//button one
///////////////////////////////
.btn-1 {
  background: darken($red, 1.5%);
  font-weight: 100;
  
  svg {
    height: 45px;
    left: 0;
    position: absolute;
    top: 0; 
    width: 100%; 
  }
  
  rect {
    fill: none;
    stroke: #fff;
    stroke-width: 2;
    stroke-dasharray: 422, 0;
  }
}

.btn-1:hover {
  background: rgba($red, 0);
  font-weight: 900;
  letter-spacing: 1px;
  
  rect {
    stroke-width: 5;
    stroke-dasharray: 15, 310;
    stroke-dashoffset: 48;
    transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);
  }
}

////////////////////////////
//button two
//////////////////////////
.btn-2 {
    letter-spacing: 0;
}

.btn-2:hover,
.btn-2:active {
  letter-spacing: 5px;
}

.btn-2:after,
.btn-2:before {
  backface-visibility: hidden;
  border: 1px solid rgba(#fff, 0);
  bottom: 0px;
  content: " ";
  display: block;
  margin: 0 auto;
  position: relative;
  transition: all 280ms ease-in-out;
  width: 0;
}

.btn-2:hover:after,
.btn-2:hover:before {
  backface-visibility: hidden;
  border-color: #fff;
  transition: width 350ms ease-in-out;
  width: 70%;
}

.btn-2:hover:before {
  bottom: auto;
  top: 0;
  width: 70%;
}

/////////////////////////////
//button -3 
///////////////////////////
.btn-3 {
  background: lighten($red, 3%);  
  border: 1px solid darken($red, 4%);
  box-shadow: 0px 2px 0 darken($red, 5%), 2px 4px 6px darken($red, 2%);
  font-weight: 900;
  letter-spacing: 1px;
  transition: all 150ms linear;
}

.btn-3:hover {
  background: darken($red, 1.5%);
  border: 1px solid rgba(#000, .05);
  box-shadow: 1px 1px 2px rgba(#fff, .2);
  color: lighten($red, 18%); 
  text-decoration: none;
  text-shadow: -1px -1px 0 darken($red, 9.5%);
  transition: all 250ms linear;
}

/////////////////////////////
//button-4 
///////////////////////////
.btn-4 {
  border: 1px solid;
  overflow: hidden;
  position: relative;
  
  span {
    z-index: 20;
  }
  
  &:after {
    background: #fff;
    content: "";
    height: 155px;
    left: -75px;
    opacity: .2;
    position: absolute;
    top: -50px;
    transform: rotate(35deg);
    transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
    width: 50px;
    z-index: -10;
  }
}

.btn-4:hover {
  
  &:after {
    left: 120%;
    transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
  }
}

/////////////////////////////
//button-5 
///////////////////////////
.btn-5 {
  border: 0 solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
  outline: 1px solid;
  outline-color: rgba(255, 255, 255, .5);
  outline-offset: 0px;
  text-shadow: none;
  transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
} 

.btn-5:hover {
  border: 1px solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, .5), 0 0 20px rgba(255, 255, 255, .2);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  text-shadow: 1px 1px 2px #427388; 
}
</style>
<section class="buttons">
  <div class="container">
    <h1>Button Hover Effects</h1>
    <a href="https://twitter.com/Dave_Conner" class="btn btn-1">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Hover1
    </a>
    <!--svg hover inspired by http://codepen.io/karimbalaa/pen/qERbBY?editors=110 -->
    <!--End of Button 1 -->
    
    <a href="https://twitter.com/Dave_Conner" class="btn btn-2">Hover</a> 
    <!--End of Button 2 -->
    
    <a href="https://twitter.com/Dave_Conner" class="btn btn-3">Hover</a> 
    <!--End of Button 3 -->
    
    <a href="https://twitter.com/Dave_Conner" class="btn btn-4"><span>Hover</span></a> 
    <!--End of Button 4 -->
    
    <a href="https://twitter.com/Dave_Conner" class="btn btn-5">Hover</a> 
    <!--End of Button 5 -->
    
    <p>Follow on <a href="https://twitter.com/Dave_Conner" target="_blank">Twitter</a></p>
  </div>
  
</section>