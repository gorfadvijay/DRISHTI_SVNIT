
  
    

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
     
/*Face Right (Default)*/

.minion{
  position: relative;
  float: left;
  width: 100px;
  height: 300px;
  margin: 30px 70px 130px 50px;
  animation: minion 2s linear infinite;
  display: inline-block;
}

.minion.brand{ margin: 30px 70px 50px 50px; }

.minion .head .eye:after,
.minion span:before, 
.minion span:after{
  content: "";
  position: relative;
  display: block;
}

.minion span,
.minion .torso:before,
.minion .torso:after{
  display: block;
  background: #efefef;
  -webkit-box-shadow: 0 0 0 2px rgba(50,50,50,1);
  box-shadow: 0 0 0 2px rgba(50,50,50,1);
}

.minion .head{
  width: 100%;
  height: 33%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  overflow: hidden;
  background-position: top right;
}

.minion .head .eye{
  margin-top: 18%;
  margin-left: 61%;
  width: 40%;
  height: 50%;
  -webkit-border-radius: 20% 100% 100% 20%;
  border-radius: 70% 100% 100% 70%;
  background: #000000;
  border: solid 3px #999999;
}

.minion .head .eye:after,.minion.forward .head .eye:before{
  top: 40%;
  left: 55%;
  width: 23%;
  height: 20%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  background: #ffffff;
  -webkit-box-shadow: 0 0 10px 3px rgba(255,255,255,1);
  box-shadow: 0 0 10px 3px rgba(255,255,255,1);
}

.minion .torso{
  position: relative;
  width: 80%;
  margin-left: 10%;
  height: 47%;
  margin-top: -10px;
  border-radius: 50%  50%  50%  50%  / 60%   60%   40%  40%;
  background-position: right top;
  background-repeat:no-repeat;
}

.minion .torso:before{ /*Right Arm*/
  float: left;
  width: 45%;
  margin: 5% 0 0 27%;
  height: 80%;
  border-radius: 45%;
  transform-origin:50% 7%;
  transform: rotate(0deg);
}

.minion .torso:after{ /*Left Arm*/
  width: 45%;
  margin: 5% 0 0 27%;
  height: 80%;
  border-radius: 45%;
  transform-origin:50% 7%;
  transform: rotate(30deg);
  z-index: -1;
}

.minion .flame, .minion .flame:after{
  width: 50%;
  background: rgba(255,255,255,.5);
  -webkit-border-radius: 100px 100px 100px 0;
  border-radius: 100px 100px 100px 0;
}

.minion .flame{
  margin: 4% 0 0 27%;
  height: 17%;
  transform: rotate(-45deg);
  animation: flame 1s ease-out infinite;
  border: none;
}

.minion .flame:after{
  top: 10%;
  margin: 12% 0 0 40%;
  height: 50%;
}


 /*Face Left*/

.minion.left .head .eye{
  margin-left: -7%;
  border-radius: 100% 70% 70% 100%;
}
.minion.left .head{
  background-position: left top;
  background-repeat:no-repeat;
}
.minion.left .head .eye:after{
  left: 23%;
}
.minion.left .torso{
  background-position: left top;
  background-repeat:no-repeat;
}
.minion.left .torso:before{/*Left Arm*/
  transform: rotate(80deg);
  background-position: top left;
}
.minion.left .torso:after{/*Right Arm*/
  transform: rotate(50deg);
}



/*Face Forward*/
.minion.forward .head{
  background-position: center top;
  background-repeat:no-repeat;
}
.minion.forward .head:before{
  background: #efefef;
  float: left;
  margin: 12% 0 0 43%;
  border-bottom: solid 3px #999999;
  border-left: solid 3px #999999;
  width: 12%;
  height: 12%;
  transform: rotate(-45deg);
}
.minion.forward .head:after{
  background: #efefef;
  float: left;
  margin: -9% 0 0 43%;
  border-top: solid 3px #999999;
  border-right: solid 3px #999999;
  width: 12%;
  height: 12%;
  transform: rotate(-45deg);
  border-radius: 100%;
}
.minion.forward .head .eye{
  margin-left: 6%;
  border-radius: 30%;
  width: 82%;
}
.minion.forward .head .eye:after{
  left: 70%;
  top: 20%;
  width: 12%;
}
.minion.forward .head .eye:before{
  left: 18%;
  width: 12%;
}
.minion.forward .torso{
  z-index: -1;
  background-position: center top;
  background-repeat:no-repeat;
}
.minion.forward .torso:before{/*Left Arm*/
  width: 30%;
  margin: 5% 0 0 0%;
  height: 80%;
  transform: rotate(15deg);
}
.minion.forward .torso:after{/*Right Arm*/
  width: 30%;
  margin: 5% 0 0 68%;
  height: 80%;
  transform: rotate(-15deg);
  z-index: 1;
}

/* Red */

.minion.red .flame,
.minion.red .flame:after{
  background: rgba(255,0,0,.5);
}
.minion.red .head .eye:after,
.minion.red.forward .head .eye:before{
  background: rgba(255,0,0,1);
  -webkit-box-shadow: 0 0 10px 3px rgba(255,0,0,.8);
  box-shadow: 0 0 10px 3px rgba(255,0,0,.8);
}

/* Green */

.minion.green .flame,
.minion.green .flame:after{
  background: rgba(0,255,0,.5);
}
.minion.green .head .eye:after,
.minion.green.forward .head .eye:before{
  background: rgba(0,255,0,1);
  -webkit-box-shadow: 0 0 10px 3px rgba(0,255,0,.8);
  box-shadow: 0 0 10px 3px rgba(0,255,0,.8);
}

/* Blue */

.minion.blue .flame,
.minion.blue .flame:after{
  background: rgba(0,0,255,.5);
}
.minion.blue .head .eye:after,
.minion.blue.forward .head .eye:before{
  background: rgba(0,0,255,1);
  -webkit-box-shadow: 0 0 10px 3px rgba(0,0,255,.8);
  box-shadow: 0 0 10px 3px rgba(0,0,255,.8);
}

/* Background Positions */

/*Subtle Animations*/

*{
  clear: both;
}
    </style>

    
</head>

<body>

 
<div class='minion forward green brand'>
  <span class='head'>
    <span class='eye'></span>
  </span>
  <span class='torso'></span>
  <span class='flame'></span>
</div>
<!--end showcase section<div class='minion left blue brand'>
  <span class='head'>
    <span class='eye'></span>
  </span>
  <span class='torso'></span>
  <span class='flame'></span>
</div>
<div class='minion right blue brand'>
  <span class='head'>
    <span class='eye'></span>
  </span>
  <span class='torso'></span>
  <span class='flame'></span>
</div>
  -->
  

</body>

</html>
