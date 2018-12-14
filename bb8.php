<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> A ngular Anim ated BB-8</title>
  
  
  

  
</head>

<body>

  <!-- This pen is the exact clone of React Animated BB-8 (https://codepen.io/bullerb/pen/gMpxNZ) recreated in AngularJS -->

<bb8-app></bb8-app>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js'></script>

<style type="text/css">
  

.bg{
  background:  #CD7640;
 
}



.config p {
  font-size: x-large;
}

.config {
  position: relative;
}

.control-wrap {
  float: left;
  margin: -15px 15px;
}



.bb8 {
 position: absolute;
  margin-left: 70px;
  width: 140px;
  bottom: -350px;
  left: 0;
}

.antennas {
  position: absolute;
  transition: left .6s;
  left: 28%;
}
.antennas.right {
  left: 6%;
}

.antenna {
  background: #e0d2be;
  position: absolute;
  width: 2px;
}
.antenna.short {
  height: 20px;
  top: -65px;
  left: 50px;
}
.antenna.long {
  border-top: 6px solid #020204;
  border-bottom: 6px solid #020204;
  height: 36px;
  top: -80px;
  left: 56px;
}

.head {
  background-color: ghostwhite;
  border-radius: 90px 90px 25px 25px;
  -moz-border-radius: 90px 90px 25px 25px;
  -webkit-border-radius: 90px 90px 25px 25px;
  height: 63px;
  margin-left: -45px;
  overflow: hidden;
  position: absolute;
  width: 104px;
  z-index: 1;
  top: -56px;
  left: 53%;
}
.head .stripe {
  position: absolute;
  width: 100%;
}
.head .stripe.one {
  background: #7699B7;
  height: 7px;
  opacity: .8;
  z-index: 1;
  top: 3px;
}
.head .stripe.two {
  background: #4286f4;
  height: 4px;
  top: 14px;
}
.head .stripe.three {
  background: #999;
  height: 4px;
  opacity: .5;
  bottom: 3px;
}
.head .stripe.detail {
  display: flex;
  width: 200px;
  bottom: 7px;
  left: -38%;
  transition: left .6s;
}
.head .stripe.detail.right {
  left: 0;
}
.head .detail {
  height: 7px;
}
.head .detail.zero {
  background-color: #4286f4;
  width: 2%;
  margin-left: 3px;
}
.head .detail.one {
  background-color: #4286f4;
  width: 8%;
  margin-left: 3px;
}
.head .detail.two {
  background-color: #4286f4;
  width: 6%;
  margin-left: 5px;
}
.head .detail.three {
  background-color: #4286f4;
  width: 4%;
  margin-left: 45px;
  height: 5px;
  margin-top: 2px;
}
.head .detail.four {
  background-color: #4286f4;
  width: 10%;
  margin-left: 4px;
}
.head .detail.five {
  background-color: #4286f4;
  width: 2%;
  margin-left: 3px;
}
.head .eyes {
  display: block;
  height: 100%;
  position: absolute;
  width: 100%;
  transition: left .6s;
  left: 0;
}
.head .eyes.right {
  left: 36%;
}
.head .eye {
  border-radius: 50%;
  display: block;
  position: absolute;
}
.head .eye.one {
  background: #020204;
  border: 4px solid lightgray;
  height: 30px;
  width: 30px;
  top: 12px;
  left: 12%;
}
.head .eye.one:after {
  background: white;
  border-radius: 50%;
  content: "";
  display: block;
  height: 3px;
  position: absolute;
  width: 3px;
  top: 4px;
  right: 4px;
}
.head .eye.two {
  background-color: lightgrey;
  border: 1px solid #020204;
  height: 16px;
  width: 16px;
  top: 30px;
  left: 40%;
}
.head .eye.two:after {
  background: #020204;
  border-radius: 50%;
  content: "";
  display: block;
  height: 10px;
  position: absolute;
  width: 10px;
  top: 2px;
  left: 2px;
}

.ball {
  background-color: ghostwhite;
  border-radius: 50%;
  height: 165px;
  overflow: hidden;
  position: relative;
  width: 165px;
}

.lines {
  border: 2px solid #B19669;
  border-radius: 50%;
  height: 400px;
  opacity: .6;
  position: absolute;
  width: 400px;
}
.lines.two {
  top: -10px;
  left: -250px;
}

.ring {
  background: #4286f4;
  border-radius: 50%;
  height: 70px;
  margin-left: -35px;
  position: absolute;
  width: 70px;
}
.ring:after {
  background-color: ghostwhite;
  border-radius: 50%;
  content: "";
  display: block;
  height: 73%;
  margin-top: -36%;
  margin-left: -36%;
  position: absolute;
  width: 73%;
  top: 50%;
  left: 50%;
}
.ring.one {
  margin-left: -40px;
  height: 90px;
  width: 100px;
  top: 2%;
  left: 42%;
}
.ring.two {
  height: 40px;
  width: 80px;
  -ms-transform: rotate(50deg);
  -webkit-transform: rotate(50deg);
  transform: rotate(50deg);
  top: 65%;
  left: 8%;
}
.ring.two:after {
  top: 100%;
}
.ring.three {
  height: 37px;
  width: 80px;
  -ms-transform: rotate(-50deg);
  -webkit-transform: rotate(-50deg);
  transform: rotate(-50deg);
  top: 68%;
  left: 84%;
}
.ring.three:after {
  top: 110%;
}

.shadow {
  background: #3A271C;
  box-shadow: 5px 0 50px #3A271C;
  border-radius: 50%;
  height: 23.3333333333px;
  opacity: .25;
  position: absolute;
  width: 140px;
  z-index: -1;
  left: 10px;
  bottom: -8px;
}

.instructions {
  
  bottom: 10px;
  width: 100%;
  text-align: center;
}

</style>












<script type="text/javascript">
  var app = angular.module('app', []);

app.component('bb8App', {
  controller: function controller($interval, $document) {
    var vm = this;
    vm.config = {
      droidX: 0,
      mouseX: 0,
      toTheRight: true,
      speed: 2,
      accelMod: 1.7 };


    vm.handleMouseMove = function ($event) {
      vm.config.mouseX = $event.pageX;
    };

    vm.movement = function () {
      if (Math.abs(Math.round(vm.config.droidX) - vm.config.mouseX) !== 1) {

        var distance = vm.config.mouseX - vm.config.droidX;
        var acceleration = Math.abs(distance * vm.config.accelMod) / 100;

        // Move to the right
        if (vm.config.droidX < vm.config.mouseX) {
          vm.config.droidX = vm.config.droidX + vm.config.speed * acceleration;
          vm.config.toTheRight = true;
        }
        // Move to the left
        else {
            vm.config.droidX = vm.config.droidX - vm.config.speed * acceleration;
            vm.config.toTheRight = false;
          }
      }
    };

    vm.$onInit = function () {
      vm.config.mouseX = 300;
      $document.on('mousemove', vm.handleMouseMove);
    };

    vm.$onDestroy = function () {
      $document.off('mousemove', vm.handleMouseMove);
    };

    $interval(vm.movement, 1);
  },
  template: '\n    <div class="logo">\n          </div>\n\n    <config-bar config-data="$ctrl.config"></config-bar>\n    <bb8 config-data="$ctrl.config"></bb8>\n\n    <div class="instructions">\n         </div>\n\n  ' });















app.component('bb8', {
  bindings: {
    configData: "=" },

  template: '\n    <div class="bb8" style="-webkit-transform: translateX({{ $ctrl.configData.droidX }}px)">\n      <div class="antennas" ng-class="{\'right\': $ctrl.configData.toTheRight}"\n           style="-webkit-transform: translateX({{ ($ctrl.configData.mouseX - $ctrl.configData.droidX) / 25 }}px) rotateZ({{ ($ctrl.configData.mouseX - $ctrl.configData.droidX) / 80 }}deg)">\n        <div class="antenna short"></div>\n        <div class="antenna long"></div>\n      </div>\n      <div class="head"\n           style="-webkit-transform: translateX({{ ($ctrl.configData.mouseX - $ctrl.configData.droidX) / 15 }}px) rotateZ({{ ($ctrl.configData.mouseX - $ctrl.configData.droidX) / 25 }}deg)">\n        <div class="stripe one"></div>\n        <div class="stripe two"></div>\n        <div class="eyes" ng-class="{\'right\': $ctrl.configData.toTheRight}">\n          <div class="eye one"></div>\n          <div class="eye two"></div>\n        </div>\n        <div class="stripe detail" ng-class="{\'right\': $ctrl.configData.toTheRight}">\n          <div class="detail zero"></div>\n          <div class="detail zero"></div>\n          <div class="detail one"></div>\n          <div class="detail two"></div>\n          <div class="detail three"></div>\n          <div class="detail four"></div>\n          <div class="detail five"></div>\n          <div class="detail five"></div>\n        </div>\n        <div class="stripe three"></div>\n      </div>\n      <div class="ball" style="-webkit-transform: rotateZ({{ $ctrl.configData.droidX / 2 }}deg)">\n        <div class="lines one"></div>\n        <div class="lines two"></div>\n        <div class="ring one"></div>\n        <div class="ring two"></div>\n        <div class="ring three"></div>\n      </div>\n      <div class="shadow"></div>\n    </div>\n\n  ' });







































app.component('configBar', {
  bindings: {
    configData: '=' },

  template: '\n    <div class="config">\n      <div class="control-wrap">\n         </div>\n    </div>\n  ' });



























angular.bootstrap(document, ['app']);
</script>


</body>

</html>
